@component('partials.header')

    @slot('title')
        Annual Tax
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">

      @include('maintenance.tax_tables.annual_tax_new')
      @include('maintenance.tax_tables.annual_tax_edit')
      @include('partials.delete_modal')

        <div class="tab">
            @include('maintenance.tax_tables.tabs')
        </div>





        <div class="container-fluid ml-17 mr-10 mt-40">
          <div class = "row">
            <div class="col-sm-12 mb-20 paneltable">
              <div class="alert alert-primary">
                <strong>Tax Table</strong>
              </div>
              <div class="table-responsive">


                <div class = "col-xs-6 button-groups">  
                  <button class="btn btn-success btn-sm" v-on:click="annual_tax_new">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> 
                    <strong> New </strong>
                  </button>
                </div>

                

                <table class="table table-bordered mt-50" id="AnnualTable">
                  <thead>
                    <tr class="thead-primary">
                      <th>Range</th>
                      <th>Fixed Rate</th>
                      <th>Tax Rate</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!$data->isEmpty())
                    @foreach($data as $row)
                    <tr>
                      <td class="text-right">{{ $row->ranges }}</td>
                      <td class="text-right">{{ number_format($row->fixed_rate, 2) }}</td>
                      <td class="text-right">{{ number_format($row->tax_rate, 2) }}</td>
                      <td class="text-center">
                        <button class="btn btn-update btn-sm" v-on:click="annual_tax_edit({{ $row->id }})">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                        </button>&nbsp;
                        <button class="btn btn-danger btn-sm"
                        v-on:click="global_delete({{ $row->id }}, 'annual_tax_delete')">
                          <i class="fa fa-trash-o" aria-hidden="true"></i> 
                        </button>
                      </td> 
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <td colspan="4">
                        <strong class="text-danger">No data available on table.</strong>
                      </td>
                    </tr>
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





















