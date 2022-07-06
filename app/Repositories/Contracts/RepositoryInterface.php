<?php

namespace App\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface as BaseRepositoryInterface;

interface RepositoryInterface extends BaseRepositoryInterface
{
    /**
     * find on one record
     * @param array $where
     * @param array $columns
     */
    public function findByWhere(array $where, $columns = ['*']);
}
