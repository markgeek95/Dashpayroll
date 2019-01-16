@component('partials.header')

    @slot('title')
        Login
    @endslot


    @section('pagestyle')
    @endsection


    @section('template')

        <div id="vue-app">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 mt-120 login-wrapper">

                          <form action="{{ url('login') }}" method="post">
                            {{ csrf_field() }}
                              <h1 class="text-center">
                                  <img src="{{ url('public/images/logo.png') }}" width="100">
                              </h1>
                              <p class="text-center" id="titletext">DashPayroll Dst</p>

                            @include('messages.errors')

                            @if(Session::has('login_error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('login_error') }}
                                </div>
                            @endif

                              <div class="username" id="usernameform">
                                  <div class="input-group form-group mt-50">
                                      <span class="input-group-addon addon bg-blue">
                                          <i class="fa fa-user"> </i>
                                      </span>
                                      <input class="form-control form-proceed" type="text" name="username" 
                                      id="username" placeholder="Enter username.." autocomplete="off"
                                      value="{{ old('username') }}" />
                                  </div>

                                  <div class="form-group text-center">
                                      <button type="submit" class="btn btn-primary btn-block full_loader_show">
                                          Next 
                                          <!-- <span class="pull-right">
                                              <i class="fa fa-refresh"></i>
                                          </span> -->
                                      </button>
                                  </div>

                                  <p class="text-right">v7.4.6.3</p>
                              </div>
                          </form>              
                    </div>
                </div>
            </div>
        </div>


    @endsection


    @section('pagescript')
    @endsection



@endcomponent


















