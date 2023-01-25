<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVarientValue extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_varient_id', 'name', 'description'
    ];
}
