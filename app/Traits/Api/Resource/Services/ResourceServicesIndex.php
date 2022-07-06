<?php

namespace App\Traits\Api\Resource\Services;

use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;

trait ResourceServicesIndex
{
    /**
     * 根据条件查询
     * @param Request $request
     * @param array|string[] $columns
     * @return mixed
     */
    public function index(Request $request, array $columns = ['*'])
    {
        $this->repository->pushCriteria(new RequestCriteria($request));
        return $this->repository->all($columns);
    }

    /**
     * 统一分页查询方法
     * @param Request $request
     * @param int $pageSize
     * @param array|string[] $columns
     * @return mixed
     */
    public function paginate(Request $request, int $pageSize, array $columns = ['*'])
    {
        $this->repository->pushCriteria(new RequestCriteria($request));
        return $this->repository->paginate($pageSize, $columns);
    }

    /**
     * where in 查询
     * @param string $field
     * @param array $value
     * @param array|string[] $columns
     * @return mixed
     */
    public function findWhereIn(string $field, array $value, array $columns = ['*'])
    {
        return $this->repository->findWhereIn($field, $value, $columns);
    }

    /**
     * 单字段条件 查询
     * @param string $field
     * @param string $value
     * @param array|string[] $columns
     * @return mixed
     */
    public function findByField(string $field, string $value, array $columns = ['*'])
    {
        return $this->repository->findByField($field, $value, $columns);
    }

    /**
     * 多条件查询
     * @param array $where
     * @param array $columns
     * @return mixed
     */
    public function findWhere(array $where, array $columns = ['*'])
    {
        return $this->repository->findWhere($where, $columns);
    }

    /**
     * 统计总数
     * @param array|null $where
     * @return mixed
     */
    public function count(?array $where = [])
    {
        return $this->repository->count($where);
    }

    /**
     * 获取所有的
     * @param array|string[] $columns
     * @return mixed
     */
    public function all(array $columns = ['*'])
    {
        return $this->repository->all($columns);
    }
}
