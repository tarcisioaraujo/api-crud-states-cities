<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CitieRequest;
use App\Http\Controllers\Controller;
use App\Citie;

class CitieController extends Controller
{
    public function index()
    {
        return Citie::all();
    }

    public function store(CitieRequest $request)
    {
        Citie::create($request->all());
    }
    
    public function show($id)
    {
        return Citie::findOrFail($id);
    }
    
    public function update(CitieRequest $request, $id)
    {
        $citie = Citie::findOrFail($id);
        $citie->update($request->all());
    }

    public function destroy($id)
    {
        $citie = Citie::findOrFail($id);
        $citie->delete();
    }
}
