<?php

namespace App\Traits\Api\Resource\Controllers;

trait ResourceControllerStore
{
    public function baseStore(array $data)
    {
        return $this->service->store($data);
    }
}
