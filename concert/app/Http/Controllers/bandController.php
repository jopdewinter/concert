<?php

namespace App\Http\Controllers;

use App\Band;


class bandController extends Controller
{
    public function index()
    {
        $bands = Band::all();
        echo $bands;
    }

    public function update($id) {
        echo 'update';
    }
}