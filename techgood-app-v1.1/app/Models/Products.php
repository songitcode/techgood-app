<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_photo1',
        'p_photo2',
        'p_photo3',
        'p_photo4',
        'p_photo5',
        'p_name',
        'p_price_old',
        'p_price_new',
    ];
}
