<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="company" class="form-label">{{ __('Company') }}</label>
            <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company', $supplier?->company) }}" id="company" placeholder="Company">
            {!! $errors->first('company', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $supplier?->last_name) }}" id="last_name" placeholder="Last Name">
            {!! $errors->first('last_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="first_name" class="form-label">{{ __('First Name') }}</label>
            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $supplier?->first_name) }}" id="first_name" placeholder="First Name">
            {!! $errors->first('first_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email_address" class="form-label">{{ __('Email Address') }}</label>
            <input type="text" name="email_address" class="form-control @error('email_address') is-invalid @enderror" value="{{ old('email_address', $supplier?->email_address) }}" id="email_address" placeholder="Email Address">
            {!! $errors->first('email_address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="job_title" class="form-label">{{ __('Job Title') }}</label>
            <input type="text" name="job_title" class="form-control @error('job_title') is-invalid @enderror" value="{{ old('job_title', $supplier?->job_title) }}" id="job_title" placeholder="Job Title">
            {!! $errors->first('job_title', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="business_phone" class="form-label">{{ __('Business Phone') }}</label>
            <input type="text" name="business_phone" class="form-control @error('business_phone') is-invalid @enderror" value="{{ old('business_phone', $supplier?->business_phone) }}" id="business_phone" placeholder="Business Phone">
            {!! $errors->first('business_phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="home_phone" class="form-label">{{ __('Home Phone') }}</label>
            <input type="text" name="home_phone" class="form-control @error('home_phone') is-invalid @enderror" value="{{ old('home_phone', $supplier?->home_phone) }}" id="home_phone" placeholder="Home Phone">
            {!! $errors->first('home_phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mobile_phone" class="form-label">{{ __('Mobile Phone') }}</label>
            <input type="text" name="mobile_phone" class="form-control @error('mobile_phone') is-invalid @enderror" value="{{ old('mobile_phone', $supplier?->mobile_phone) }}" id="mobile_phone" placeholder="Mobile Phone">
            {!! $errors->first('mobile_phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fax_number" class="form-label">{{ __('Fax Number') }}</label>
            <input type="text" name="fax_number" class="form-control @error('fax_number') is-invalid @enderror" value="{{ old('fax_number', $supplier?->fax_number) }}" id="fax_number" placeholder="Fax Number">
            {!! $errors->first('fax_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $supplier?->address) }}" id="address" placeholder="Address">
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="city" class="form-label">{{ __('City') }}</label>
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city', $supplier?->city) }}" id="city" placeholder="City">
            {!! $errors->first('city', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="state_province" class="form-label">{{ __('State Province') }}</label>
            <input type="text" name="state_province" class="form-control @error('state_province') is-invalid @enderror" value="{{ old('state_province', $supplier?->state_province) }}" id="state_province" placeholder="State Province">
            {!! $errors->first('state_province', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="zip_postal_code" class="form-label">{{ __('Zip Postal Code') }}</label>
            <input type="text" name="zip_postal_code" class="form-control @error('zip_postal_code') is-invalid @enderror" value="{{ old('zip_postal_code', $supplier?->zip_postal_code) }}" id="zip_postal_code" placeholder="Zip Postal Code">
            {!! $errors->first('zip_postal_code', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="country_region" class="form-label">{{ __('Country Region') }}</label>
            <input type="text" name="country_region" class="form-control @error('country_region') is-invalid @enderror" value="{{ old('country_region', $supplier?->country_region) }}" id="country_region" placeholder="Country Region">
            {!! $errors->first('country_region', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="web_page" class="form-label">{{ __('Web Page') }}</label>
            <input type="text" name="web_page" class="form-control @error('web_page') is-invalid @enderror" value="{{ old('web_page', $supplier?->web_page) }}" id="web_page" placeholder="Web Page">
            {!! $errors->first('web_page', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="notes" class="form-label">{{ __('Notes') }}</label>
            <input type="text" name="notes" class="form-control @error('notes') is-invalid @enderror" value="{{ old('notes', $supplier?->notes) }}" id="notes" placeholder="Notes">
            {!! $errors->first('notes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="attachments" class="form-label">{{ __('Attachments') }}</label>
            <input type="text" name="attachments" class="form-control @error('attachments') is-invalid @enderror" value="{{ old('attachments', $supplier?->attachments) }}" id="attachments" placeholder="Attachments">
            {!! $errors->first('attachments', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>