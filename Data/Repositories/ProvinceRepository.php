<?php

namespace App\Containers\Vendor\Province\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class ProvinceRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
