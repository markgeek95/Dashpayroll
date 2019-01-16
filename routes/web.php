<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('partials.login_username');
});
Route::post('login_now', 'LoginController@login_now');
Route::resource('login', 'LoginController');


Route::get('payroll_user', 'NewPayrollUserController@payroll_user');
Route::post('decrypt', 'NewPayrollUserController@decrypt');
Route::resource('new_payroll_user', 'NewPayrollUserController');

Route::resource('company_information', 'CompanyInformationController');

Route::post('get_all_employees', 'EmployeeController@get_all_employees');
Route::resource('employee', 'EmployeeController');


/* government tables */
Route::get('philhealth_delete/{id?}', 'PhilhealthController@delete');
Route::resource('philhealth', 'PhilhealthController');
Route::get('sss_delete/{id?}', 'SSSController@delete');
Route::resource('sss', 'SSSController');


Route::get('get_frequency', 'FrequencyController@get_frequency');


/* tax tables */
Route::get('withholding_tax_delete/{id?}', 'WithholdingTaxController@delete');
Route::resource('withholding_tax', 'WithholdingTaxController');
Route::get('annual_tax_delete/{id?}', 'AnnualTaxController@delete');
Route::resource('annual_tax', 'AnnualTaxController');


/* leave table */
Route::get('leave_delete/{id?}', 'LeaveController@delete');
Route::resource('leave', 'LeaveController');

/* holiday */
Route::get('holiday_types', 'HolidayController@holiday_type');
Route::resource('holiday', 'HolidayController');



















