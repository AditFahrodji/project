<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'produk_id',
        'kuantitas',
        'jumlah_unit',
        'jumlah_total'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function produk() {
        return $this->belongsTo(Produk::class);
    }
}
