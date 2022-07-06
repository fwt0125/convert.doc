<?php

namespace App\Domain\Convert\Repositories\Eloquent;

use App\Domain\Convert\Repositories\Contracts\DocListsRepository;
use App\Domain\Models\Convert\DocLists;
use App\Repositories\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;

/**
 * Class DocListsRepositoryEloquent.
 */
class DocListsRepositoryEloquent extends BaseRepository implements DocListsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return DocLists::class;
    }

    /**
     * Boot up the repository, pushing criteria
     * @throws RepositoryException
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
