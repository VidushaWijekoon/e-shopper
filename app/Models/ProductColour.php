<?php

namespace App\Models;

use App\Models\Colour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductColour extends Model
{
    use HasFactory;

    protected $table = 'product_colours';

    protected $fillable = [
        'product_id',
        'colour_id',
        'quantity',
        'created_by'
    ];

    public function colour()
    {
        return $this->belongsTo(Colour::class, 'colour_id', 'id');
    }
}
