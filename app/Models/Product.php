<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Database එකට save කරන්න අවසර දෙන columns ටික
    protected $fillable = [
        'name', 
        'category', 
        'price', 
        'original_price', 
        'discount_percentage', 
        'image_url', 
        'stock'
    ];
}