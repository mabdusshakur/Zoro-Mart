<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'price', 'quantity', 'image', 'category_id', 'sub_category_id', 'product_uid', 'sold', 'discount_price', 'on_sale'];

    public function productViews()
    {
        return $this->hasMany(ProductView::class);
    }

    public function productReviews()
    {
        return $this->hasMany(Review::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(subCategory::class);
    }
}
