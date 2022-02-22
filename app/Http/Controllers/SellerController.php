<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    protected $model;
    public function __construct (Seller $seller) {
        $this->model=$seller;
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
        $data=$this->model->where('id', $request->seller)->first();
        return $this->successResponse($data);
    }

    public function update(Request $request)
    {
        $data = json_decode($request->getContent());
        $this->model->where('id', $request->seller)
            ->update((array) $data);
        return $this->successResponse();
    }
}
