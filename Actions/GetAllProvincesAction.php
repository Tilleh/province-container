<?php

namespace App\Containers\Vendor\Province\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\Vendor\Province\Tasks\GetAllProvincesTask;
use App\Containers\Vendor\Province\UI\API\Requests\GetAllProvincesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllProvincesAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllProvincesRequest $request): mixed
    {
        return app(GetAllProvincesTask::class)->run();
    }
}
