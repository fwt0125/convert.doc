<?php

namespace App\Traits\Api\Resource\Services;

trait ResourceServicesUpdate
{
    public function update($data)
    {
        $attr['id'] = 0;
        if (isset($data['id'])) {
            $attr['id'] = $data['id'];
            unset($data['id']);
        }

        return $this->repository->updateOrCreate($attr, $data);
    }

    public function onlyUpdate(array $data, int $id)
    {
        return $this->repository->update($data, $id);
    }

    public function updateOrCreate($attr, $data)
    {
        return $this->repository->updateOrCreate($attr, $data);
    }
}
