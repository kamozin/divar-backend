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

//    public function createFolder()
//    {
//        $collection = (new FastExcel)->sheet(2)->import('file.xlsx');
//
////        dd($collection);
//        $arr = [];
//        $i = 0;
//        foreach ($collection as $a) {
//            if (strripos($a['Контракт'], '.') == strlen($a['Контракт']) - 1) {
//                Storage::makeDirectory('/divar2/' . trim(str_replace('.', '', $a['Контракт'])));
//            } else {
//                Storage::makeDirectory('/divar2/' . trim($a['Контракт']));
//            }
//        }
//
//        foreach ($collection as $a) {
//            if (strripos($a['Контракт'], '.') == strlen($a['Контракт']) - 1) {
//                Storage::makeDirectory('/divar2/' . trim(str_replace('.', '', $a['Контракт'])).'/'.str_replace('/', '_', $a['Ном ГТД']));
//            } else {
//                Storage::makeDirectory('/divar2/' . trim($a['Контракт']).'/'.str_replace('/', '_', $a['Ном ГТД']));
//            }
//        }
//    }
}
