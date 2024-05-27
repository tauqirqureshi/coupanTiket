<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $table = "products";

    protected $fillable = [
        'id',
        'name',
        'color',
        'weight',
        'shape',
        'ri',
        'sg',
        'hardless',
        'micro_obs',
        'comment',
        'image',
        'slug'
    ];
//ALTER TABLE `products` ADD `slug` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL AFTER `updated_at`;
}
