<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CitieRequest;
use App\Http\Controllers\Controller;
use App\Citie;

class CitieController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cities",
     *     tags={"Cities"},
     *     summary="Get a list of cities",
     *     description="Returns a list of cities",     
     *     @OA\Response(
     *          response="200", 
     *          description="Successful operation"
     *     )
     * )
     * 
    */
    public function index()
    {
        return Citie::all();
    }

    /**
     * @OA\Post(
     *      path="/api/cities",     
     *      tags={"Cities"},
     *      summary="Store new citie",
     *      description="Store citie data",
     *      @OA\Parameter(
     *          name="name",
     *          in="query",
     *          description="Citie name",
     *          required=true,
     *      ),
     *      @OA\Parameter(
     *          name="state_id",
     *          description="State id",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity"
     *      )
     * )
    */
    public function store(CitieRequest $request)
    {
        Citie::create($request->all());
    }
    
    /**
     * @OA\Get(
     *      path="/api/cities/{id}",     
     *      tags={"Cities"},
     *      summary="Get citie information",
     *      description="Returns citie data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Citie id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *       ),   
     *      @OA\Response(
     *          response=404,
     *          description="Not Found"
     *      )
     * )
    */
    public function show($id)
    {
        return Citie::findOrFail($id);
    }
    
    /**
     * @OA\Put(
     *      path="/api/cities/{id}",     
     *      tags={"Cities"},
     *      summary="Update existing citie",
     *      description="Update citie data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Citie id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="name",
     *          in="query",
     *          description="Citie name",
     *          required=true,
     *      ),
     *      @OA\Parameter(
     *          name="state_id",
     *          description="State id",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Not Found"
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity"
     *      )
     * )
    */
    public function update(CitieRequest $request, $id)
    {
        $citie = Citie::findOrFail($id);
        $citie->update($request->all());
    }

    /**
     * @OA\Delete(
     *      path="/api/cities/{id}",     
     *      tags={"Cities"},
     *      summary="Delete existing citie",
     *      description="Delete a citie data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Citie id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Not Found"
     *      )
     * )
    */
    public function destroy($id)
    {
        $citie = Citie::findOrFail($id);
        $citie->delete();
    }
}
