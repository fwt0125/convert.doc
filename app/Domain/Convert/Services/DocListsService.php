<?php

namespace App\Domain\Convert\Services;

use App\Domain\Convert\Repositories\Contracts\DocListsRepository;
use App\Traits\Api\Resource\Services\ResourceServicesDestroy;
use App\Traits\Api\Resource\Services\ResourceServicesIndex;
use App\Traits\Api\Resource\Services\ResourceServicesShow;
use App\Traits\Api\Resource\Services\ResourceServicesStore;
use App\Traits\Api\Resource\Services\ResourceServicesUpdate;
class DocListsService
{
    use ResourceServicesUpdate;
    use ResourceServicesIndex;
    use ResourceServicesShow;
    use ResourceServicesDestroy;
    use ResourceServicesStore;

    /**
     * @var DocListsRepository
     */
    protected $repository;

    public function __construct(DocListsRepository $docListsService)
    {
        $this->repository =  $docListsService;
    }

}
