<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository as ParentBaseRepository;
use Prettus\Repository\Exceptions\RepositoryException;

abstract class BaseRepository extends ParentBaseRepository
{
    /**
     * Find data by multiple fields
     *
     * @param array $where
     * @param array $columns
     *
     * @param null $groupBy
     * @return mixed
     * @throws RepositoryException
     */
    public function findByWhere(array $where, $columns = ['*'], $groupBy = null)
    {
        $this->applyCriteria();
        $this->applyScope();

        $this->selfApplyConditions($where, $groupBy);

        $model = $this->model->get($columns);
        $this->resetModel();

        return $this->parserResult($model);
    }

    /**
     * 自定义查询条件
     * @param array $where
     * @param string|null $groupBy
     */
    protected function selfApplyConditions(array $where, ?string $groupBy)
    {
        foreach ($where as $field => $value) {
            if (is_array($value)) {
                @list($field, $condition, $val) = $value;
                $condition = strtoupper($condition);
                if ($condition == 'IN') {
                    $this->model = $this->model->whereIn($field, $val);
                } elseif ($condition == 'IS NOT NULL') {
                    $this->model = $this->model->whereNotNull($field);
                } elseif ($condition == 'IS NULL') {
                    $this->model = $this->model->whereNull($field);
                } elseif ($condition == 'LIKE') {
                    $this->model = $this->model->where($field, 'like', '%' . $val . '%');
                } else {
                    $this->model = $this->model->where($field, $condition, $val);
                }
            } else {
                $this->model = $this->model->where($field, '=', $value);
            }
        }
        if (!empty($groupBy)) {
            $this->model->groupBy($groupBy);
        }
        //parent::applyConditions($where);
    }

    protected function saveInfo(array $attr, array $data)
    {
        return $this->model->updateOrCreate($attr, $data);
    }
}
