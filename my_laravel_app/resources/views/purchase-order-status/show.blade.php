@extends('layouts.app')

@section('template_title')
    {{ $purchaseOrderStatus->name ?? __('Show') . " " . __('Purchase Order Status') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Purchase Order Status</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('purchase-order-status.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Status:</strong>
                                    {{ $purchaseOrderStatus->status }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
