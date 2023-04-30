<?php

namespace App\Containers\Vendor\Province\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\Vendor\Province\Actions\FindProvinceByIdAction;
use App\Containers\Vendor\Province\UI\API\Requests\FindProvinceByIdRequest;
use App\Containers\Vendor\Province\UI\API\Transformers\FindProvinceByIdTransformer;
use App\Containers\Vendor\Province\UI\API\Transformers\ProvinceTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindProvinceByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findProvinceById(FindProvinceByIdRequest $request): array
    {
        $province = app(FindProvinceByIdAction::class)->run($request);

        return $this->transform($province, FindProvinceByIdTransformer::class);
    }
}
