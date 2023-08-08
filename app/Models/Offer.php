<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'offer_starting_date',
        'offer_ends_at',
        'offer_discount',
        'offer_price',
        'image',
        'created_by',
        'approved_by'
    ];
}
