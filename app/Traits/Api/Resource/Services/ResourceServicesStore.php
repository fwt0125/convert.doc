<?php

namespace App\Traits\Api\Resource\Services;

trait ResourceServicesStore
{
    public function store($data)
    {
        return $this->repository->create($data);
    }
}
