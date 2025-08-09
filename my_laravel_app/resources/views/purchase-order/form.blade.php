<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="supplier_id" class="form-label">{{ __('Supplier Id') }}</label>
            <input type="text" name="supplier_id" class="form-control @error('supplier_id') is-invalid @enderror" value="{{ old('supplier_id', $purchaseOrder?->supplier_id) }}" id="supplier_id" placeholder="Supplier Id">
            {!! $errors->first('supplier_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="created_by" class="form-label">{{ __('Created By') }}</label>
            <input type="text" name="created_by" class="form-control @error('created_by') is-invalid @enderror" value="{{ old('created_by', $purchaseOrder?->created_by) }}" id="created_by" placeholder="Created By">
            {!! $errors->first('created_by', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="submitted_date" class="form-label">{{ __('Submitted Date') }}</label>
            <input type="text" name="submitted_date" class="form-control @error('submitted_date') is-invalid @enderror" value="{{ old('submitted_date', $purchaseOrder?->submitted_date) }}" id="submitted_date" placeholder="Submitted Date">
            {!! $errors->first('submitted_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="creation_date" class="form-label">{{ __('Creation Date') }}</label>
            <input type="text" name="creation_date" class="form-control @error('creation_date') is-invalid @enderror" value="{{ old('creation_date', $purchaseOrder?->creation_date) }}" id="creation_date" placeholder="Creation Date">
            {!! $errors->first('creation_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status_id" class="form-label">{{ __('Status Id') }}</label>
            <input type="text" name="status_id" class="form-control @error('status_id') is-invalid @enderror" value="{{ old('status_id', $purchaseOrder?->status_id) }}" id="status_id" placeholder="Status Id">
            {!! $errors->first('status_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="expected_date" class="form-label">{{ __('Expected Date') }}</label>
            <input type="text" name="expected_date" class="form-control @error('expected_date') is-invalid @enderror" value="{{ old('expected_date', $purchaseOrder?->expected_date) }}" id="expected_date" placeholder="Expected Date">
            {!! $errors->first('expected_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="shipping_fee" class="form-label">{{ __('Shipping Fee') }}</label>
            <input type="text" name="shipping_fee" class="form-control @error('shipping_fee') is-invalid @enderror" value="{{ old('shipping_fee', $purchaseOrder?->shipping_fee) }}" id="shipping_fee" placeholder="Shipping Fee">
            {!! $errors->first('shipping_fee', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="taxes" class="form-label">{{ __('Taxes') }}</label>
            <input type="text" name="taxes" class="form-control @error('taxes') is-invalid @enderror" value="{{ old('taxes', $purchaseOrder?->taxes) }}" id="taxes" placeholder="Taxes">
            {!! $errors->first('taxes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="payment_date" class="form-label">{{ __('Payment Date') }}</label>
            <input type="text" name="payment_date" class="form-control @error('payment_date') is-invalid @enderror" value="{{ old('payment_date', $purchaseOrder?->payment_date) }}" id="payment_date" placeholder="Payment Date">
            {!! $errors->first('payment_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="payment_amount" class="form-label">{{ __('Payment Amount') }}</label>
            <input type="text" name="payment_amount" class="form-control @error('payment_amount') is-invalid @enderror" value="{{ old('payment_amount', $purchaseOrder?->payment_amount) }}" id="payment_amount" placeholder="Payment Amount">
            {!! $errors->first('payment_amount', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="payment_method" class="form-label">{{ __('Payment Method') }}</label>
            <input type="text" name="payment_method" class="form-control @error('payment_method') is-invalid @enderror" value="{{ old('payment_method', $purchaseOrder?->payment_method) }}" id="payment_method" placeholder="Payment Method">
            {!! $errors->first('payment_method', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="notes" class="form-label">{{ __('Notes') }}</label>
            <input type="text" name="notes" class="form-control @error('notes') is-invalid @enderror" value="{{ old('notes', $purchaseOrder?->notes) }}" id="notes" placeholder="Notes">
            {!! $errors->first('notes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="approved_by" class="form-label">{{ __('Approved By') }}</label>
            <input type="text" name="approved_by" class="form-control @error('approved_by') is-invalid @enderror" value="{{ old('approved_by', $purchaseOrder?->approved_by) }}" id="approved_by" placeholder="Approved By">
            {!! $errors->first('approved_by', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="approved_date" class="form-label">{{ __('Approved Date') }}</label>
            <input type="text" name="approved_date" class="form-control @error('approved_date') is-invalid @enderror" value="{{ old('approved_date', $purchaseOrder?->approved_date) }}" id="approved_date" placeholder="Approved Date">
            {!! $errors->first('approved_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="submitted_by" class="form-label">{{ __('Submitted By') }}</label>
            <input type="text" name="submitted_by" class="form-control @error('submitted_by') is-invalid @enderror" value="{{ old('submitted_by', $purchaseOrder?->submitted_by) }}" id="submitted_by" placeholder="Submitted By">
            {!! $errors->first('submitted_by', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>