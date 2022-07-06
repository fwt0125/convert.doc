<?php

namespace App\Traits\Api\Resource\Controllers;

use Illuminate\Http\Request;

trait ResourceControllersIndex
{
    public function index(Request $request, $columns = ['*'])
    {
        return $this->service->index($request, $columns);
    }

    public function all(Request $request, $columns = ['*'])
    {
        return $this->service->index($request, $columns);
    }

    public function paginate(Request $request, int $pageSize = 10, array $columns = ['*'])
    {
        return $this->service->paginate($request, $pageSize, $columns);
    }
}
