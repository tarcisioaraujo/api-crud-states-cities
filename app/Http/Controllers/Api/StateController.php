<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StateRequest;
use App\Http\Controllers\Controller;
use App\State;

class StateController extends Controller
{    
    /**
     * @OA\Get(
     *     tags={"state"},
     *     summary="Get a list of states",
     *     description="Returns a list of states",
     *     path="/state",
     *     @OA\Response(
     *          response="200", 
     *          description="Successful operation"
     *     ),
     * )
     * 
    */
    public function index()
    {
        return State::all();
    }

    public function store(StateRequest $request)
    {
        State::create($request->all());
    }
    
    public function show($id)
    {
        return State::findOrFail($id);
    }
    
    public function update(StateRequest $request, $id)
    {
        $state = State::findOrFail($id);
        $state->update($request->all());
    }

    public function destroy($id)
    {
        $state = State::findOrFail($id);
        $state->delete();
    }
}
