<?php

namespace App\Http\Controllers;

use App\Models\Sender;
use Illuminate\Http\Request;

class SenderController extends Controller
{
    protected $model;
    public function __construct (Sender $sender) {
        $this->model=$sender;
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
        $data=$this->model->where('id', $request->sender)->first();
        return $this->successResponse($data);
    }

    public function update(Request $request)
    {
        $data = json_decode($request->getContent());
        $this->model->where('id', $request->sender)
            ->update((array) $data);
        return $this->successResponse();
    }
}
