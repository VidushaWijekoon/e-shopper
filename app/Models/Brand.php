<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'image',
        'description',
        'active_status ',
        'approve_status ',
        'created_by',
        'approved_by'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
