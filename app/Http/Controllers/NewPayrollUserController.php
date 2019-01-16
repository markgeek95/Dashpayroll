<?php

namespace App\Http\Controllers;

use App\Menu;
use App\MenuRoleUser;
use App\Role;
use App\User;
use App\Username;
use App\NewPayrollUser;
use App\Suffix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Validation\Rule;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class NewPayrollUserController extends Controller
{

    public function index()
    {
        $user_levels = NewPayrollUser::all();
        $suffixes = Suffix::all();
        $menus = Menu::all();
        $roles = Role::all();
        return view('admin.new_payroll_user', compact('user_levels', 'suffixes', 'menus', 'roles'));
    }


    public function store(Request $request)
    {

        $menus = Menu::all();

        $user_access = false;
        foreach ($menus as $menu){
            if ($request->filled(strtolower($menu->name))){
                $user_access = true;
                break;
            }
        }

        if (!$user_access){
            $request->request->add(['user_access' => null]); //add request
        }else{
            $request->request->add(['user_access' => true]); //add request
        }


        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'user_level' => 'required',
            'username' => 'required|max:35|min:2|unique:users',
            'password' => 'required|max:35|min:6',
            'last_name' => 'required|max:35',
            'first_name' => 'required|max:35',
            'middle_name' => 'nullable|max:35',
            'suffix' => 'nullable|max:20',
            'user_access' => 'required',
        ]);

        if ($validator->passes()){


            // insert user details
            $user = User::create([
                'code_id' => $request->code,
                'user_level_id' => $request->user_level,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'avatar' => null
            ]);

            // insert name of user
            Username::create([
                'user_id' => $user->id,
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'suffix' => $request->suffix
            ]);


            DB::table('secrets')
                ->insert([
                    'user_id' => $user->id,
                    'secret' => Crypt::encryptString($request->password)
                ]);




            // insert menu role of user
            foreach ($menus as $menu){
                if ($request->filled(strtolower($menu->name))){
                    MenuRoleUser::create([
                        'user_id' => $user->id,
                        'menu_id' => $menu->id,
                        'role_id' => $request->input(strtolower($menu->name))
                    ]);
                }
            }

            Session::flash('toastr', array('success', 'Registration Successful'));
            return redirect()->back();



        }else{
            Session::flash('toastr', array('error', 'Registration Failed'));
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

    }




    public function edit($id)
    {


        $user_levels = NewPayrollUser::all();
        $suffixes = Suffix::all();
        $menus = Menu::all();
        $roles = Role::all();


        $user = User::find($id);
        $username = Username::where('user_id', $id)->first();
        $menu_role_users = MenuRoleUser::where('user_id', $id)->get();


        return view('admin.new_payroll_user_edit',
            compact('user_levels', 'suffixes', 'menus', 'roles', 'user', 'username'));
    }



    public function update(Request $request, $id)
    {
        $menus = Menu::all();

        $user_access = false;
        foreach ($menus as $menu){
            if ($request->filled(strtolower($menu->name))){
                $user_access = true;
                break;
            }
        }

        if (!$user_access){
            $request->request->add(['user_access' => null]); //add request
        }else{
            $request->request->add(['user_access' => true]); //add request
        }


        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'user_level' => 'required',
            'username' => [
                'required',
                'max:35',
                'min:2',
                Rule::unique('users')->ignore($id), // if user does not change his username then retain old username
            ],
            'password' => 'required|min:6',
            'old_password' => [
                'required',
                function($attribute, $value, $fail){ // check old password
                    $password = User::find(request('id'));
                    if(!Hash::check($value, $password->password) && $value != 'laravel'){ // use laravel text to skip old password
                        $fail('The :attribute field doesn\'t match to the current password');
                    }
                },
            ],
            'last_name' => 'required|max:35',
            'first_name' => 'required|max:35',
            'middle_name' => 'nullable|max:35',
            'suffix' => 'nullable|max:20',
            'user_access' => 'required',
        ]);



        if ($validator->passes()){


            // insert user details
            $user = User::find($id);
            $user->user_level_id = $request->user_level;
            $user->code_id = $request->user_level;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->avatar = null;
            $user->save();


            // insert name of user
            Username::where('user_id', $id)
            ->update([
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'suffix' => $request->suffix
            ]);


            DB::table('secrets')
                ->where('user_id', $id)
                ->update([
                    'secret' => Crypt::encryptString($request->password)
                ]);


            MenuRoleUser::where('user_id', $id)->delete();

            // insert menu role of user
            foreach ($menus as $menu){
                if ($request->filled(strtolower($menu->name))){
                    MenuRoleUser::create([
                        'user_id' => $user->id,
                        'menu_id' => $menu->id,
                        'role_id' => $request->input(strtolower($menu->name))
                    ]);
                }
            }

            Session::flash('toastr', array('success', 'Registration details has been updated'));
            return redirect()->back();

        }else{
            Session::flash('toastr', array('error', 'Registration Failed'));
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
    }



    public function payroll_user()
    {
        $users = DB::table('users')
                    ->leftJoin('user_levels', 'user_levels.id', 'users.user_level_id')
                    ->leftJoin('usernames', 'usernames.user_id', 'users.id')
                    ->select('users.id as uid', 'usernames.*', 'users.*', 'user_levels.*')
                    ->get();
        return view('admin.payroll_user', compact('users'));
    }


    public function decrypt(Request $request)
    {
        $user = DB::table('secrets')
                ->where('user_id', $request->uid)->first();

        $decrypted = Crypt::decryptString($user->secret);

        echo json_encode($decrypted);
        return;
    }





}
