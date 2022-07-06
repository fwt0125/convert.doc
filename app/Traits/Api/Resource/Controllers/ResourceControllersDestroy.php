<?php

namespace App\Traits\Api\Resource\Controllers;

trait ResourceControllersDestroy
{
    public function baseDestroy($id)
    {
        return $this->service->destroy($id);
    }
}
