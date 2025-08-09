<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'company' => 'string',
			'last_name' => 'string',
			'first_name' => 'string',
			'email_address' => 'string',
			'job_title' => 'string',
			'business_phone' => 'string',
			'home_phone' => 'string',
			'mobile_phone' => 'string',
			'fax_number' => 'string',
			'city' => 'string',
			'state_province' => 'string',
			'zip_postal_code' => 'string',
			'country_region' => 'string',
        ];
    }
}
