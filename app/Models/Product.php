<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'title',
        'name',
        'slug',
        'product_information',
        'additional_information',
        'short_description',
        'product_original_price',
        'product_selling_price',
        'product_discount_percent',
        'product_quantity',
        'tranding',
        'status',
        'product_meta_title',
        'product_meta_keyword',
        'product_meta_description',
        'created_by',
        'approved_by'
    ];

    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function productColor()
    {
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
