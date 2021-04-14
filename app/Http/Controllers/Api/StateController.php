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
     *     summary="Returns a list of states",
     *     description="Returns a object of states",
     *     path="/V1/state",
     *     @OA\Response(response="200", description="A list with states"),
     * ),
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
