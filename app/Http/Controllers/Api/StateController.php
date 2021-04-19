<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StateRequest;
use App\Http\Controllers\Controller;
use App\State;

class StateController extends Controller
{    
    /**
     * @OA\Get(
     *     path="/api/states",
     *     tags={"States"},
     *     summary="Get a list of states",
     *     description="Returns a list of states",     
     *     @OA\Response(
     *          response="200", 
     *          description="Successful operation"
     *     )
     * )
     * 
    */
    public function index()
    {
        return State::all();
    }

    /**
     * @OA\Post(
     *      path="/api/states",     
     *      tags={"States"},
     *      summary="Store new state",
     *      description="Store state data",
     *      @OA\Parameter(
     *          name="name",
     *          in="query",
     *          description="State name",
     *          required=true,
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation"
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity"
     *      )
     * )
    */
    public function store(StateRequest $request)
    {
        return State::create($request->all());
    }
    
    /**
     * @OA\Get(
     *      path="/api/states/{id}",     
     *      tags={"States"},
     *      summary="Get state information",
     *      description="Returns state data",
     *      @OA\Parameter(
     *          name="id",
     *          description="State id",
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
        return State::findOrFail($id);
    }
    
    /**
     * @OA\Put(
     *      path="/api/states/{id}",     
     *      tags={"States"},
     *      summary="Update existing state",
     *      description="Update state data",
     *      @OA\Parameter(
     *          name="id",
     *          description="State id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="name",
     *          in="query",
     *          description="State name",
     *          required=true,
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
    public function update(StateRequest $request, $id)
    {
        $state = State::findOrFail($id);
        $state->update($request->all());

        return $state;
    }

    /**
     * @OA\Delete(
     *      path="/api/states/{id}",     
     *      tags={"States"},
     *      summary="Delete existing state",
     *      description="Delete a state data",
     *      @OA\Parameter(
     *          name="id",
     *          description="State id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=204,
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
        $state = State::findOrFail($id);
        $state->delete();

        return response()->json(null, 204);
    }
}
