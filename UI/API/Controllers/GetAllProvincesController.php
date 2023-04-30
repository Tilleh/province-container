<?php

namespace App\Containers\Vendor\Province\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\Vendor\Province\Actions\GetAllProvincesAction;
use App\Containers\Vendor\Province\UI\API\Requests\GetAllProvincesRequest;
use App\Containers\Vendor\Province\UI\API\Transformers\GetAllProvincesTransformer;
use App\Containers\Vendor\Province\UI\API\Transformers\ProvinceTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllProvincesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllProvinces(GetAllProvincesRequest $request): array
    {
        $provinces = app(GetAllProvincesAction::class)->run($request);

        return $this->transform($provinces, GetAllProvincesTransformer::class);
    }
}
