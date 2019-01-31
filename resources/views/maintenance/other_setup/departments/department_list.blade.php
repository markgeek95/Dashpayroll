<div class="col-xs-12 mb-20 paneltable mt-40">
    <div class="alert alert-primary">
        <strong>Department List</strong>
    </div>


    <button type="button" class="btn btn-success btn-sm"
    v-on:click="departments_new_open_modal">
        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
        <strong> New </strong>
    </button>

    <div class="table-responsive mt-10">
        <table class="table table-bordered ">
            <thead>
            <tr class="thead-primary">
                <th>Department</th>
            </tr>
            </thead>
            <tbody>
                @if(!$departments->isEmpty())
                    @foreach($departments as $department)
                        <tr>
                            <td>{{ $department->name }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>
                            <strong class="text-danger">No departments found.</strong>
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
</div>