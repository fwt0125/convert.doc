<?php

namespace App\Traits\Api\Resource\Controllers;

trait ResourceControllersShow
{
    public function find($id)
    {
        return $this->service->show($id);
    }
}
