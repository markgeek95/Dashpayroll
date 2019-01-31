<div class="col-xs-6 col-md-3 clearfix" style="margin-left: -1.5%;">
    <div class="table-responsive">


        <div class="wrapper col-xs-4">
            <div class="col-xs-3 myBtndiv mb-10">
                <button type="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Add
                </button>
            </div>
        </div>


        <table class="table table-bordered">
            <thead>
            <tr class="active">
                <th>Class</th>
            </tr>
            </thead>
            <tbody>

            @if(!$class_list->isEmpty())
                @foreach($class_list as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center">
                        <strong class="text-danger">No cost center found.</strong>
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>