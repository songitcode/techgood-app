<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';

    protected $table = 'products';

    public $incrementing = true;

    protected $fillable = [
        'p_name',
        'cate_id',
        'p_price_old',
        'p_price_new',
        'p_description',
        'p_color',
        'p_type',
        'p_quantity',
        'p_photo1',
        'p_photo2',
        'p_photo3',
        'p_photo4',
        'p_photo5',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id');
    }
}
