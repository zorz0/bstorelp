<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "name_english",
        "description",
        "description_english",

        "Alldescription",
        "Alldescription_english",

        "image",
        "price",
        "discount_price",
        "category_id"
    ];
    protected $table = "products";
    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }
    public function ProductSize()
    {
        return $this->hasMany(ProductSize::class);
    }

    public function product()
    {
        return $this->hasMany(ProductImage::class);
    }
}
