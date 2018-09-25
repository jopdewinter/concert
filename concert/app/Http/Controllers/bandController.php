<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;


class bandController extends Controller
{
    public function index()
    {
        return view('index.index');
    }

    public function getAll()
    {
        $bands = Band::all();
        echo $bands;
    }

    public function create(Request $request) {
        $array = json_decode($request ->getContent(), true);

        return response()->json(Band::create($array), 201);
    }

    public function update($id, Request $request) {
        $Band = Band::findOrFail($id);
        $Band->update($request->all());

        return response()->json($Band, 200);
    }

    public function delete($id)
    {
        Band::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}