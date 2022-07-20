<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageIndex extends Controller
{
    public function __invoke()
    {
        return view('Page.HomeP');
    }

    public function autos()
    {
        return view('autos.autos');
    }
    public function personas()
    {
        return view('personas.personas');
    }
    public function reportes()
    {
        return view('autos.autos');
    }
}
