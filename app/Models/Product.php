<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'meta' => 'object',
        'images' => 'array',
    ];

    public function images(): Attribute
    {
        return Attribute::set(fn ($value) => json_encode($value));
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
