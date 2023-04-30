<?php

namespace App\Containers\Vendor\Province\UI\API\Transformers;

use App\Containers\Vendor\Province\Models\Province;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class GetAllProvincesTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Province $province): array
    {
        $response = [
            'object' => $province->getResourceKey(),
            'id'     => $province->getHashedKey(),
            'name'   => $province->name
        ];

        return $this->ifAdmin([
            'real_id' => $province->id,
        ], $response);
    }
}
