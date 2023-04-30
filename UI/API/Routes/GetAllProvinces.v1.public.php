<?php

/**
 * @apiGroup           Province
 * @apiName            GetAllProvinces
 *
 * @api                {GET} /v1/provinces Get All Provinces
 * @apiDescription     Get All Provinces
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\Vendor\Province\UI\API\Controllers\GetAllProvincesController;
use Illuminate\Support\Facades\Route;

Route::get('provinces', [GetAllProvincesController::class, 'getAllProvinces']);

