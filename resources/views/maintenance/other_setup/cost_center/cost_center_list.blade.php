<div class="col-xs-12 mb-20 paneltable mt-40">
    <div class="alert alert-primary">
        <strong>Cost Center List</strong>
    </div>


    <button type="button" class="btn btn-success btn-sm"
            v-on:click="cost_center_new_open_modal">
        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
        <strong> New </strong>
    </button>

    <div class="table-responsive mt-10">
        <table class="table table-bordered ">
            <thead>
            <tr class="thead-primary">
                <th>Cost Center</th>
            </tr>
            </thead>
            <tbody>
            @if(!$cost_centers->isEmpty())
                @foreach($cost_centers as $cost_center)
                    <tr>
                        <td>{{ $cost_center->name }}</td>
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