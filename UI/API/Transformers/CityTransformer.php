<?php

namespace App\Containers\Vendor\Province\UI\API\Transformers;

use App\Containers\Vendor\Province\Models\City;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class CityTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(City $city): array
    {
        $response = [
            'object' => $city->getResourceKey(),
            'id'     => $city->getHashedKey(),
            'name'   => $city->name,
        ];

        return $this->ifAdmin([
            'real_id' => $city->id,
        ], $response);
    }
}
