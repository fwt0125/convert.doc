<?php

namespace App\Repositories\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Group by 查询构造器
 * Class GroupByCriteria
 *
 */
class GroupByCriteria implements CriteriaInterface
{
    protected $groupByField;

    public function __construct(string $groupByField)
    {
        $this->groupByField = $groupByField;
    }

    /**
     * 添加Group by条件
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $groupByField = $this->groupByField;
        return $model->groupBy($groupByField);
    }
}
