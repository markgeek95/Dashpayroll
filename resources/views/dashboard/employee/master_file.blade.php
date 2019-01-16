@component('partials.header')

    @slot('title')
        Employee Master File
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">

        <div class="tab">
            @include('dashboard.dashboard_tabs')
        </div>

        <!-- Main Content Goes Here -->


<div class="container-fluid mt-40 mr-20">
    <div class="row">
      <div class="col-xs-12 mb-20 ml-35">

        <div class="alert alert-primary">
          <strong class="text-center">Employee Table</strong>
        </div>

        <div class="table-responsive panelcontent">
          <div class="col-xs-6 button-groups">  
            <a href="dashboard/employeefileNew/">
              <a href="{{ url('employee/create') }}" class ="btn btn-success btn-sm">
                <i class="fa fa-plus" aria-hidden="true"></i> New
              </a>
            </a>
                <span class="btn btn-info btn-file btn-sm">
                    <i class="glyphicon glyphicon-cloud-upload"></i> 
                    Import <input type="file" multiple>
                </span>
          </div>

          <table class="table table-bordered" id="dadasTable">
            <thead>
              <tr class="active">
                <th>ID</th>
                <th>Name</th>
                <th>BirthDate</th>
                <th>Shift</th>
                <th>Position</th>
                <th>Department</th>
                <th>Address</th>
                <th>Zip Code</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Gender</th>
              </tr>
            </thead>
            <tbody>

                @if(!$employees->isEmpty())
                    @foreach($employees as $employee )
                      <tr>
                        <td>{{ $employee->id }}</td>
                        <td>
                            {{ $employee->last_name.', '.$employee->first_name.' '.
                            $employee->name.' '.$employee->middle_name }}
                        </td>
                        <td>{{ Carbon::parse($employee->birthdate)->toFormattedDateString() }}</td>
                        <td>{{ $employee->shift }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->department }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->zip_code }}</td>
                        <td>{{ $employee->contact_no }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ ($employee->gender == 'M')? 'Male' : 'Female' }}</td>
                      </tr>
                    @endforeach

              @else

                <tr>
                    <td colspan="11" class="text-center">
                        <strong class="text-red">
                            Employee master file is empty
                        </strong>
                    </td>
                </tr>

              @endif


            </tbody>

            <tfoot>
                <tr>
                    <td colspan="11" class="text-center">
                        {{ $employees->links() }}
                    </td>
                </tr>
            </tfoot>

          </table>

        </div>  
      </div>
    </div>
  </div>



        


        @include('partials.footer')

    </div>



@endsection

@endcomponent

@endsection


@section('pagescript')

    <script>
        $(document).on('change', '.company_image', function(event){
            var fileUpload = event.target.files;
            $('.fileShowingImage').val(fileUpload[0].name);
        });
    </script>
@endsection



@endcomponent





















