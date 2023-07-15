<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Colour;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    public function brand()
    {
        return $this->hasMany(Brand::class, 'category_id', 'id');
    }

    public function colour()
    {
        return $this->hasMany(Colour::class, 'category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
