<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ProductSubCategory;
use App\Http\Controllers\ApiController;

class ProductSubCategoryController extends ApiController
{
    public function index()
    {
        $data = ProductSubCategory::all();
        return $this->showAll($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required'
        ]);
        $data = ProductSubCategory::create([
            'product_category_id' => $request->product_category_id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return $this->showOne($data);
    }
}
