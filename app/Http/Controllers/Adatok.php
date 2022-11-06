<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adatok as AdatokModel;

class Adatok extends Controller
{
    public function index()
    {
        return view('adatok_form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'vezeteknev' => 'required|max:255',
            'keresztnev' => 'required|max:255',
            'szuletesiev' => 'required|digits:4',
        ]);

        $object = new AdatokModel;
        $object->vezeteknev = $request->vezeteknev;
        $object->keresztnev = $request->keresztnev;
        $object->szuletesiev = $request->szuletesiev;
        $object->save();

        return redirect('/');
    }
}
