<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'payment_method_id',
        'total',
        'discount',
        'status',
        'shipping_code'
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class,'id','user_id');
    }
}
