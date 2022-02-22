<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function successResponse($data = null)
    {
        if (isset($data))
            return ['result' => true, 'data' => $data];

        return ['result' => true];
    }

    public function errorResponse($error = null)
    {
        if (isset($error))
            return ['result' => false, 'error' => $error];

        return ['result' => false];
    }

    public function paginateResponse($paginate)
    {
        if(!$paginate)
            return $this->errorResponse();

        return [
            'result' => true,
            'data' => [
                'count' => $paginate->count(),
                'hasMore' => $paginate->hasMorePages(),
                'items' => $paginate->items(),
            ],
        ];
    }


}
