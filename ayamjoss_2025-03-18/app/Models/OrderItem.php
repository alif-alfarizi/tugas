<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'menu_id',
        'nama',
        'harga',
        'jumlah',
        'subtotal'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}