<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'category_id',
        'product_name',
        'price',
        'content',
        'discount',
        'image',
        'image_list',
        'status',
    ];

        /**
     * @return HasMany
     */
    public function categories(): HasMany
    {
        return $this->hasMany(
            Category::class,
            'id',
        );
    }
}
