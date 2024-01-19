<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('planets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $planet = new Planet;
        $planet->title = $request->title;
        $planet->detail = $request->detail;
        $planet->distance = $request->distance;
        $planet->duree = $request->duree;
        $planet->save();
        return back()->with('message', "The planet has been created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Planet $planet)
    {
        return view('planets.show', compact('planet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planet $planet)
    {
        return view('tasks.edit', compact('planet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planet $planet)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $planet->title = $request->title;
        $planet->detail = $request->detail;
        $planet->distance = $request->distance;
        $planet->duree = $request->duree;
        $planet->state = $request->has('state');
        $planet->save();
        return back()->with('message', "The planet has been edited!");     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planet $planet)
    {
        $planet->delete();
    }
}
