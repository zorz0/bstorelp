<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "status",
        "total_price",
        "address",
        "name",
        "phone",
        "postal_code",
        "shipping_price"
    ];
    protected $table = "orders";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
