<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Planet;
class AffichageController extends Controller
{
    public function index()
    {
        return view('welcome',['body' => 'container_welcome']);
    }
    public function moon()
    {
        $planets = Planet::all();
        return view('planetsMoon',['body' => 'container_planet'])->with('planets', $planets);
    }
    public function equipages()
    {
        return view('equipages',['body' => 'container_equipage']);
    }
    public function technologie()
    {
        return view('technologieLanceur',['body' => 'container_technologie']);
    }
    public function mars()
    {
        return view('planetsMars',['body' => 'container_planet']);
    }
    public function europa()
    {
        return view('planetsEurope',['body' => 'container_planet']);
    }
    public function titan()
    {
        return view('planetsTitan',['body' => 'container_planet']);
    }
    public function planet(Request $request)
    {
        $planet = Planet::where('title', '=', $request->planetName)->firstOrFail();
        return view('planets', compact('planet'),['body' => 'container_technologie']);
    }
    public function technologiePage2()
    {
        return view('technologieSpatioport',['body' => 'container_technologie']);
    }
    public function technologiePage3()
    {
        return view('technologieCapsule',['body' => 'container_technologie']);
    }
    public function language(Request $request)
    {
        App::setLocale($request->locale);
        return view('welcome',['body' => 'container_welcome']);
    }
}
