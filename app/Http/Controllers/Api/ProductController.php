<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ProductController extends ApiController
{
    public function index()
    {
        $data = Product::all();
        return $this->showAll($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'sku' => 'required',
            'description' => 'required',
            'price' => 'required',
            'production_date' => 'required',
            'transaction_number' => 'required',
        ]);

        $data = Product::create([
            'product_sub_category_id' => $request->product_sub_category_id,
            'product_varient_value_id' => $request->product_varient_value_id,
            'name' => $request->name,
            'sku' => $request->sku,
            'price_decision_factor_id' => $request->price_decision_factor_id,
            'description' => $request->description,
            'price' => $request->price,
            'production_date' => $request->production_date,
            'transaction_number' => $request->transaction_number,
        ]);

        return $this->showOne($data);
    }
}
