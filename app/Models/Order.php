<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'address', 'status'];


    public function status(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                switch ($value) {
                    case '0':
                        return 'Order Placed';

                    case '1':
                        return 'Shipped';
                    case '2':
                        return 'Out For Delivery';
                    case '3':
                        return 'Delivered';
                }
            }
        );
    }
    public function OrderProducts(){
        return $this->hasMany(OrderProduct::class,'order_id','id');
    }
}
