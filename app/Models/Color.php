<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'colors';

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
}
