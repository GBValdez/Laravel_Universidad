<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PurchaseOrderStatus
 *
 * @property $id
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property PurchaseOrder[] $purchaseOrders
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PurchaseOrderStatus extends Model
{
	protected $table = 'purchase_order_status';
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseOrders()
    {
        return $this->hasMany(\App\Models\PurchaseOrder::class, 'id', 'status_id');
    }
    
}
