<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\State;

class StateController extends Controller
{
    
    public function index()
    {
        return State::all();
    }

    public function store(Request $request)
    {
        State::create($request->all());
    }
    
    public function show($id)
    {
        return State::findOrFail($id);
    }
    
    public function update(Request $request, $id)
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
