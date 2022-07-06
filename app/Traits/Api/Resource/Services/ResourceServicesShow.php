<?php

namespace App\Traits\Api\Resource\Services;

trait ResourceServicesShow
{
    public function show($id)
    {
        // validate data here
        $this->repository->resetCriteria();
        return $this->repository->findByField('id', $id)->first();
    }
}
