<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API CRUD States Cities Documentation",
 *      description="An API with CRUD of States and Cities",
 *      @OA\Contact(
 *          email="tarcisio.saraujo@gmail.com"
 *      ),
 *      @OA\License(
 *          name="The MIT License (MIT)",
 *          url="https://mit-license.org/"
 *      )
 * )
 *
 *
 * @OA\Tag(
 *     name="API CRUD States Cities",
 *     description="API Endpoints of CRUD States Cities"
 * )
*/
class Controller extends BaseController
{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
