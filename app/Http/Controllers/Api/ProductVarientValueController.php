<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ProductVarientValue;
use App\Http\Controllers\ApiController;

class ProductVarientValueController extends ApiController
{
    public function index()
    {
        $data = ProductVarientValue::all();
        return $this->showAll($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required'
        ]);
        $data = ProductVarientValue::create([
            'product_varient_id' => $request->product_varient_id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return $this->showOne($data);
    }
}
