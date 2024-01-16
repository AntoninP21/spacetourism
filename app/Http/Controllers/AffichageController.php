<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffichageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function moon()
    {
        return view('planetsMoon');
    }
    public function equipages()
    {
        return view('equipages');
    }
    public function technologie()
    {
        return view('technologie');
    }
    public function mars()
    {
        return view('planetsMars');
    }
    public function europa()
    {
        return view('planetsEurope');
    }
    public function titan()
    {
        return view('planetsTitan');
    }
}
