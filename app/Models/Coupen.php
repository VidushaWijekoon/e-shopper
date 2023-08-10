<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupen extends Model
{
    use HasFactory;

    public $table = 'coupens';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'coupen_number',
        'coupen_percentage',
        'description',
        'active_status',
        'approve_status',
        'created_by',
        'approved_by'
    ];
}
