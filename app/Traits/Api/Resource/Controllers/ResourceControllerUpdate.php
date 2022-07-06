<?php

namespace App\Traits\Api\Resource\Controllers;

trait ResourceControllerUpdate
{
    public function baseUpdate(array $data, int $id)
    {
        return $this->service->onlyUpdate($data, $id);
    }
}
