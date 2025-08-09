@extends('layouts.app')

@section('template_title')
    Purchase Orders
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Purchase Orders') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('purchase-orders.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Supplier Id</th>
									<th >Created By</th>
									<th >Submitted Date</th>
									<th >Creation Date</th>
									<th >Status Id</th>
									<th >Expected Date</th>
									<th >Shipping Fee</th>
									<th >Taxes</th>
									<th >Payment Date</th>
									<th >Payment Amount</th>
									<th >Payment Method</th>
									<th >Notes</th>
									<th >Approved By</th>
									<th >Approved Date</th>
									<th >Submitted By</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchaseOrders as $purchaseOrder)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $purchaseOrder->supplier_id }}</td>
										<td >{{ $purchaseOrder->created_by }}</td>
										<td >{{ $purchaseOrder->submitted_date }}</td>
										<td >{{ $purchaseOrder->creation_date }}</td>
										<td >{{ $purchaseOrder->status_id }}</td>
										<td >{{ $purchaseOrder->expected_date }}</td>
										<td >{{ $purchaseOrder->shipping_fee }}</td>
										<td >{{ $purchaseOrder->taxes }}</td>
										<td >{{ $purchaseOrder->payment_date }}</td>
										<td >{{ $purchaseOrder->payment_amount }}</td>
										<td >{{ $purchaseOrder->payment_method }}</td>
										<td >{{ $purchaseOrder->notes }}</td>
										<td >{{ $purchaseOrder->approved_by }}</td>
										<td >{{ $purchaseOrder->approved_date }}</td>
										<td >{{ $purchaseOrder->submitted_by }}</td>

                                            <td>
                                                <form action="{{ route('purchase-orders.destroy', $purchaseOrder->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('purchase-orders.show', $purchaseOrder->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('purchase-orders.edit', $purchaseOrder->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $purchaseOrders->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
