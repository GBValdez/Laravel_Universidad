<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PurchaseOrder
 *
 * @property $id
 * @property $supplier_id
 * @property $created_by
 * @property $submitted_date
 * @property $creation_date
 * @property $status_id
 * @property $expected_date
 * @property $shipping_fee
 * @property $taxes
 * @property $payment_date
 * @property $payment_amount
 * @property $payment_method
 * @property $notes
 * @property $approved_by
 * @property $approved_date
 * @property $submitted_by
 *
 * @property Employee $employee
 * @property PurchaseOrderStatus $purchaseOrderStatus
 * @property Supplier $supplier
 * @property InventoryTransaction[] $inventoryTransactions
 * @property PurchaseOrderDetail[] $purchaseOrderDetails
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PurchaseOrder extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['supplier_id', 'created_by', 'submitted_date', 'creation_date', 'status_id', 'expected_date', 'shipping_fee', 'taxes', 'payment_date', 'payment_amount', 'payment_method', 'notes', 'approved_by', 'approved_date', 'submitted_by'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee::class, 'created_by', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function purchaseOrderStatus()
    {
        return $this->belongsTo(\App\Models\PurchaseOrderStatus::class, 'status_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo(\App\Models\Supplier::class, 'supplier_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryTransactions()
    {
        return $this->hasMany(\App\Models\InventoryTransaction::class, 'id', 'purchase_order_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseOrderDetails()
    {
        return $this->hasMany(\App\Models\PurchaseOrderDetail::class, 'id', 'purchase_order_id');
    }
    
}
