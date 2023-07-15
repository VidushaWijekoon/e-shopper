<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Colour extends Model
{
    use HasFactory;

    protected $table = 'colours';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'status',
        'created_by'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
