@extends('layouts.app')

@section('template_title')
    {{ $supplier->name ?? __('Show') . " " . __('Supplier') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Supplier</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('suppliers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Company:</strong>
                                    {{ $supplier->company }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Last Name:</strong>
                                    {{ $supplier->last_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>First Name:</strong>
                                    {{ $supplier->first_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email Address:</strong>
                                    {{ $supplier->email_address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Job Title:</strong>
                                    {{ $supplier->job_title }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Business Phone:</strong>
                                    {{ $supplier->business_phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Home Phone:</strong>
                                    {{ $supplier->home_phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mobile Phone:</strong>
                                    {{ $supplier->mobile_phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fax Number:</strong>
                                    {{ $supplier->fax_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Address:</strong>
                                    {{ $supplier->address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>City:</strong>
                                    {{ $supplier->city }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>State Province:</strong>
                                    {{ $supplier->state_province }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Zip Postal Code:</strong>
                                    {{ $supplier->zip_postal_code }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Country Region:</strong>
                                    {{ $supplier->country_region }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Web Page:</strong>
                                    {{ $supplier->web_page }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Notes:</strong>
                                    {{ $supplier->notes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Attachments:</strong>
                                    {{ $supplier->attachments }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
