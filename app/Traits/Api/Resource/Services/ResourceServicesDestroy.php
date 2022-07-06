<?php

namespace App\Traits\Api\Resource\Services;

trait ResourceServicesDestroy
{
    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
