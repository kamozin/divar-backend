<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    protected $model;
    public function __construct (Package $package) {
        $this->model=$package;
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
        $data=$this->model->select('id', 'title', 'title_en')->where('id', $request->package)->first();
        return $this->successResponse($data);
    }

    public function update(Request $request)
    {
        $data = json_decode($request->getContent());
        $this->model->where('id', $request->package)
            ->update((array) $data);
        return $this->successResponse();
    }
}
