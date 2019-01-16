@component('partials.header')

    @slot('title')
        Philhealth Maintenance
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">

      @include('maintenance.government_tables.philhealth_modal')
      @include('maintenance.government_tables.philhealth_modal_edit')

        <div class="tab">
            @include('maintenance.government_tables.tabs')
        </div>

        <div class="container-fluid mt-40 mr-20">
            <div class = "row">
            <div class="col-xs-11 mb-20 ml-35 paneltable">
                    <div class="alert alert-primary">
                      <strong>PhilHealth Table</strong>
                    </div>
                <div id="tableSort" class="table-responsive panelcontent">  
                    <div class="col-xs-6 button-groups" style="z-index: 100">  
                        <button type="button" class="btn btn-success btn-sm"
                        v-on:click="philhealth_maintenance">
                            <i class="fa fa-plus"></i> New
                        </button>
                        <span class="btn btn-info btn-file btn-sm">
                            <i class="glyphicon glyphicon-cloud-upload"></i> 
                            Import <input type="file" multiple>
                        </span>
                    </div>

                          <table class="table table-bordered" id="dadasTable" >
                            <thead>
                              <tr>
                                <th>Range</th>
                                <th class="text-right">Amount</th>
                                <th class="text-right">Rate</th>
                                <th>Employee</th>
                                <th>Employer</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                              <tbody>
                                @if(!$datas->isEmpty())
                                  @foreach($datas as $data)
                                  <tr>
                                        <td>{{ $data->ranges }}</td>
                                        <td class="text-right">{{ number_format($data->amount, 2) }}</td>
                                        <td class="text-right">{{ number_format($data->rate, 2) }}</td>
                                        <td>
                                          <strong class="text-blue text-uppercase">
                                            {{ $data->last_name.', '.$data->first_name.' '.
                                          $data->name.' '.$data->middle_name }}
                                          </strong>
                                        </td>
                                        <td>  
                                          <strong class="text-blue text-uppercase">
                                            {{ $data->employer }}
                                          </strong>
                                        </td>
                                        <td class="text-center">
                                          <button type="submit" class="btn btn-primary btn-sm"
                                          v-on:click="philhealth_maintenance_edit($event, {{ $data->phil_id }})">
                                              <i class="fa fa-pencil-square-o"></i>
                                          </button>
                                          <button type="submit" class="btn btn-danger btn-sm"
                                          v-on:click="philhealth_maintenance_delete({{ $data->phil_id }})">
                                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                                          </button>
                                        </td>
                                  </tr>
                                  @endforeach
                                @endif
                              </tbody>    
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
@endsection



@endcomponent





















