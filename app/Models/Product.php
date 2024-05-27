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
        'shape',
        'ri',
        'sg',
        'hardless',
        'weight',
        'micro_obs',
        'comment',
        'image',
        'size',// ALTER TABLE `products` ADD `size` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
        'xrays', // ALTER TABLE `products` ADD `xrays` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
        'natural_face', //
        'treatment', //
        'final_obs',//
        'making',//
        'indain_name',//
        'shape_cut', //
        'inclussion', //
        'stone_name',//
        'treatment',//
        'hitech_no',//
    ];

    // step 1 : run the queries in DB
    // step 2 : run command
    //      php artisan cache:clear
    //      php artisan config:clear
    //      php artisan route:clear
    // MYSQL query
    //ALTER TABLE `products` ADD `size` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `xrays` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `natural_face` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `treatment_created_faces` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `final_obs` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `making` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `indain_name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `shape_cut` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `inclussion` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `stone_name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `treatment` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
    //ALTER TABLE `products` ADD `hitech_no` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;



    // question
// 1. 'shape and cut' and 'shape' both are diff
// 2. treatment /created face and treatment both diff
// 3. Indain name and name  both diff
// 4. what of field need the client in new feilds
//      ex. dropdwon,text, checked cox

}
