<?php

namespace App\Containers\Vendor\Province\Tasks;

use App\Containers\Vendor\Province\Data\Repositories\ProvinceRepository;
use App\Containers\Vendor\Province\Models\Province;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindProvinceByIdTask extends ParentTask
{
    public function __construct(
        protected ProvinceRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Province
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
