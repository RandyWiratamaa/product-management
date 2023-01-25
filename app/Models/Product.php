<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_sub_category_id',
        'product_varient_value_id',
        'name',
        'sku',
        'price_decision_factor_id',
        'description',
        'price',
        'production_date',
        'transaction_number',
    ];
}
