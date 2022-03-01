<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Rap2hpoutre\FastExcel\FastExcel;


class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $data = $this->model->orderBy('id', 'desc')->get();
        return $this->successResponse($data);
    }

    public function store(Request $request)
    {
        $data = json_decode($request->getContent());
        $validator = Validator::make((array)$data, [
            'email' => 'required|email|max:50',
            'password' => 'required|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $this->model->create((array)$data);

        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = json_decode($request->getContent());

        $validator = Validator::make((array)$data, [
            'email' => 'required|email|max:50',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors());
        }

        $user = $this->model->where('id', $request->user)->first();
        $data->password = bcrypt($data->password);
        $user->update((array)$data);
        return $this->successResponse();
    }
}
