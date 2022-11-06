<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adatok extends Controller
{
    public function index()
    {
        return view('adatok_form');
    }

    public function store(Request $request)
    {
    }
}
