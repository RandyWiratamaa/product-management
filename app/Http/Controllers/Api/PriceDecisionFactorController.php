<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PriceDecisionFactor;
use App\Http\Controllers\ApiController;

class PriceDecisionFactorController extends ApiController
{
    public function index()
    {
        $data = PriceDecisionFactor::all();
        return $this->showAll($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        $data = PriceDecisionFactor::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return $this->showOne($data);
    }
}
