@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? __('Show') . " " . __('Employee') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('employees.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Company:</strong>
                                    {{ $employee->company }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Last Name:</strong>
                                    {{ $employee->last_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>First Name:</strong>
                                    {{ $employee->first_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email Address:</strong>
                                    {{ $employee->email_address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Job Title:</strong>
                                    {{ $employee->job_title }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Business Phone:</strong>
                                    {{ $employee->business_phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Home Phone:</strong>
                                    {{ $employee->home_phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mobile Phone:</strong>
                                    {{ $employee->mobile_phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fax Number:</strong>
                                    {{ $employee->fax_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Address:</strong>
                                    {{ $employee->address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>City:</strong>
                                    {{ $employee->city }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>State Province:</strong>
                                    {{ $employee->state_province }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Zip Postal Code:</strong>
                                    {{ $employee->zip_postal_code }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Country Region:</strong>
                                    {{ $employee->country_region }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Web Page:</strong>
                                    {{ $employee->web_page }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Notes:</strong>
                                    {{ $employee->notes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Attachments:</strong>
                                    {{ $employee->attachments }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
