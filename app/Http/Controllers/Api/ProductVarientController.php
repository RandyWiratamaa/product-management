<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ProductVarient;
use App\Http\Controllers\ApiController;

class ProductVarientController extends ApiController
{
    public function index()
    {
        $data = ProductVarient::all();
        return $this->showAll($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required'
        ]);
        $data = ProductVarient::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return $this->showOne($data);
    }
}
