@extends('layouts.app')

@section('template_title')
    {{ $purchaseOrder->name ?? __('Show') . " " . __('Purchase Order') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Purchase Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('purchase-orders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Supplier Id:</strong>
                                    {{ $purchaseOrder->supplier_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Created By:</strong>
                                    {{ $purchaseOrder->created_by }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Submitted Date:</strong>
                                    {{ $purchaseOrder->submitted_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Creation Date:</strong>
                                    {{ $purchaseOrder->creation_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status Id:</strong>
                                    {{ $purchaseOrder->status_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Expected Date:</strong>
                                    {{ $purchaseOrder->expected_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Shipping Fee:</strong>
                                    {{ $purchaseOrder->shipping_fee }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Taxes:</strong>
                                    {{ $purchaseOrder->taxes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Payment Date:</strong>
                                    {{ $purchaseOrder->payment_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Payment Amount:</strong>
                                    {{ $purchaseOrder->payment_amount }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Payment Method:</strong>
                                    {{ $purchaseOrder->payment_method }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Notes:</strong>
                                    {{ $purchaseOrder->notes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Approved By:</strong>
                                    {{ $purchaseOrder->approved_by }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Approved Date:</strong>
                                    {{ $purchaseOrder->approved_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Submitted By:</strong>
                                    {{ $purchaseOrder->submitted_by }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
