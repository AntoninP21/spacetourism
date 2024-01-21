<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technologie;
class TechnologieController extends Controller
    {
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technologie::all();
        return view('technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('technologies.create');
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
        $technologie = new Technologie;
        $technologie->title = $request->title;
        $technologie->detail = $request->detail;
        $technologie->image_path = $request->image_path;
        $technologie->save();
        return back()->with('message', "The technologie has been created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Technologie $technologie)
    {
        return view('technologies.show', compact('technologie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technologie $technologie)
    {
        return view('technologies.edit', compact('technologie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technologie $technologie)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $technologie->title = $request->title;
        $technologie->detail = $request->detail;
        $technologie->image_path = $request->image_path;
        $technologie->save();
        return back()->with('message', "The technologie has been edited!");     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technologie $technologie)
    {
        $technologie->delete();
        return view("/dashboard");
    }
}
