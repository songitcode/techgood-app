<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'cate_id';
    protected $table = 'category';

    public $incrementing = true;

    protected $fillable = [
        'cate_name'
    ];
    public function products()
    {
        return $this->hasMany(Products::class, 'cate_id');
    }
}
