<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'title',
        'name',
        'slug',
        'brand_id',
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
    ];
}
