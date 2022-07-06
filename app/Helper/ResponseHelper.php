<?php

namespace App\Helper;

class ResponseHelper
{
    /**
     * 组装分页显示数组
     * @param array $data
     * @param array $options
     * @return array
     */
    public static function paginate(array $data, array $options = []): array
    {
        $meta = ['total' => $data['total'] ?? 0];
        if (!empty($options)) {
            $meta = array_merge($meta, $options);
        }
        return [
            'data' => $data['data'] ?? [],
            'meta' => $meta
        ];
    }
}
