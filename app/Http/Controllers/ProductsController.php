<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $model;
    public function __construct (Products $products) {
        $this->model=$products;
    }

    public function index()
    {
        $data=$this->model->get();
        return $this->successResponse($data);
    }

    public function store(Request $request)
    {
        $data = json_decode($request->getContent());

        $this->model->create((array) $data);
        return $this->successResponse();
    }

    public function show (Request $request)
    {
        $data=$this->model->where('id', $request->product)->first();
        return $this->successResponse($data);
    }

    public function update(Request $request)
    {
        $data = json_decode($request->getContent());
        $this->model->where('id', $request->product)
            ->update((array) $data);
        return $this->successResponse();
    }
}
