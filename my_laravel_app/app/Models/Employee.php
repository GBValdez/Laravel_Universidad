<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $company
 * @property $last_name
 * @property $first_name
 * @property $email_address
 * @property $job_title
 * @property $business_phone
 * @property $home_phone
 * @property $mobile_phone
 * @property $fax_number
 * @property $address
 * @property $city
 * @property $state_province
 * @property $zip_postal_code
 * @property $country_region
 * @property $web_page
 * @property $notes
 * @property $attachments
 *
 * @property EmployeePrivilege[] $employeePrivileges
 * @property Order[] $orders
 * @property PurchaseOrder[] $purchaseOrders
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['company', 'last_name', 'first_name', 'email_address', 'job_title', 'business_phone', 'home_phone', 'mobile_phone', 'fax_number', 'address', 'city', 'state_province', 'zip_postal_code', 'country_region', 'web_page', 'notes', 'attachments'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employeePrivileges()
    {
        return $this->hasMany(\App\Models\EmployeePrivilege::class, 'id', 'employee_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'id', 'employee_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseOrders()
    {
        return $this->hasMany(\App\Models\PurchaseOrder::class, 'id', 'created_by');
    }
    
}
