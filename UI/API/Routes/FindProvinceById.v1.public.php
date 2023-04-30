<?php

/**
 * @apiGroup           Province
 * @apiName            FindProvinceById
 *
 * @api                {GET} /v1/provinces/:id Find Province By Id
 * @apiDescription     Get a province with cities
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 *
 * @apiParam           {String} id
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\Vendor\Province\UI\API\Controllers\FindProvinceByIdController;
use Illuminate\Support\Facades\Route;

Route::get('provinces/{id}', [FindProvinceByIdController::class, 'findProvinceById']);

