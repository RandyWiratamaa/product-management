<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\ApiController;

class ProductCategoryController extends ApiController
{
    public function index()
    {
        $data = ProductCategory::all();
        return $this->showAll($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required'
        ]);
        $data = ProductCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return $this->showOne($data);
    }
}
