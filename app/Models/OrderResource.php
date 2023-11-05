<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderResource extends Model
{
    use HasFactory;

    protected $fillable = [
        'resource', 'amount', 'existing', 'order_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
