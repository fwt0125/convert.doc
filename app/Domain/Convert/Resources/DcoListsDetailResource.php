<?php

namespace App\Domain\Convert\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocListsDetailResource extends JsonResource
{
    public function toArray($request)
    {
        $groupIdArr = $this->roles()->pluck('id');
        $propertyIdArr = [];
        $propertyIds = $this->property_ids;
        if (!empty($propertyIds) && $propertyIds != -1) {
            $propertyIdArr = explode(',', $propertyIds);
            //转整型
            array_walk($propertyIdArr, function (&$val, $key) {
                $val = (int)$val;
            });
        }

        return [
            'id' => $this->id ?? 0,
            'name' => $this->name ?? '',
            'email' => $this->email ?? '',
            'password' => '',
            'mobile' => $this->mobile ?? 0,
            'group_ids' => $groupIdArr,
            'property_ids' => $propertyIdArr
        ];
    }
}
