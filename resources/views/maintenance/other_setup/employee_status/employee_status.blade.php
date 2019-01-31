<div class="alert alert-primary col-xs-12 ">
    <strong> Employee Status</strong>
</div>
<div class="col-xs-6 col-md-3 clearfix" style="margin-left: -1.5%;">
    <div class="table-responsive">
        <div class="wrapper col-xs-5">
            <div class="col-xs-3 myBtndiv mb-10">
                <button type="submit" class="btn btn-success"
                v-on:click="open_employee_status_new_modal">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> New
                </button>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr class="active">
                <th>Description</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @if(!$employee_status->isEmpty())
                @foreach($employee_status as $row)
                    <tr>
                        <td>{{ $row->description }}</td>
                        <td>{{ ($row->status)? 'Active' : 'None-Active' }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="2">
                        <strong class="text-danger">No cost center found.</strong>
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>