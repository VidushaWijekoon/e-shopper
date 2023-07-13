<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
