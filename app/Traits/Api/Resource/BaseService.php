<?php

namespace App\Traits\Api\Resource;

use App\Traits\Api\Resource\Services\ResourceServicesDestroy;
use App\Traits\Api\Resource\Services\ResourceServicesIndex;
use App\Traits\Api\Resource\Services\ResourceServicesShow;
use App\Traits\Api\Resource\Services\ResourceServicesStore;
use App\Traits\Api\Resource\Services\ResourceServicesUpdate;

class BaseService
{
    use ResourceServicesStore;
    use ResourceServicesIndex;
    use ResourceServicesUpdate;
    use ResourceServicesDestroy;
    use ResourceServicesShow;
}
