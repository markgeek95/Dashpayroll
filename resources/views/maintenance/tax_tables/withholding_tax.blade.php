@component('partials.header')

    @slot('title')
        Withholding Tax
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">

      @include('maintenance.tax_tables.withholding_tax_new')
      @include('maintenance.tax_tables.withholding_tax_edit')
      @include('maintenance.tax_tables.withholding_tax_delete')

        <div class="tab">
            @include('maintenance.tax_tables.tabs')
        </div>

        <div class="container-fluid ml-17 mr-10 mt-40">
          <div class="row">
            <div class="col-sm-12 mb-20 paneltable">
              <div class="alert alert-primary">
                <strong>Tax Table</strong>
              </div>
              <div class="table-responsive">

                <div class="col-xs-6 button-groups">  
                  <button class="btn btn-success btn-sm"
                  v-on:click="withholding_tax_new">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> 
                    <strong> New </strong> 
                  </button>
                </div>
                
                <table class="table table-bordered mt-50" id="TaxTables">
                  <thead>
                    <tr class="thead-primary">
                      <th>Frequency</th>
                      <th>Range</th>
                      <th>Percentage</th>
                      <th>Amount</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!$data->isEmpty())
                    @foreach($data as $row)
                    <tr>
                      <td>{{ $row->name }}</td>
                      <td class="text-right">{{ $row->ranges }}</td>
                      <td class="text-right">{{ $row->percentage }}</td>  
                      <td class="text-right">{{ number_format($row->amount, 2) }}</td>
                      <td class="text-center">
                        <button class="btn btn-primary btn-sm"
                        v-on:click.prevent="witholding_tax_edit($event, {{ $row->tax_id }})">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                        </button>&nbsp;
                        <button class="btn btn-danger btn-sm"
                        v-on:click.prevent="witholding_tax_delete_modal({{ $row->tax_id }})">
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





















