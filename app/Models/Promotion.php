<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'promotions';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'promotion_starting_date',
        'promotion_ends_at',
        'promotion_discount',
        'promotion_price',
        'image',
        'created_by',
        'approved_by'
    ];
}
