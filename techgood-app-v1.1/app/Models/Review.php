<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $primaryKey = 'review_id';

    public $incrementing = true;

    /**
     * Relationship
     * @return BelongsTo
     */
    public function products(): BelongsTo
    {
        return $this->belongsTo(Products::class);
    }
}
