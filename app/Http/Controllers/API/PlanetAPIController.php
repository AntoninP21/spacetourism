<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Planet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanetAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planets = Planet::all();
        return response()->json(
            $planets
        );
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->input();
    
        $rules = [
            'title' => 'required|max:20', //Must be a number and length of value is 8
            'detail' => 'required|max:300',
            'distance' => 'required|max:30',
            'duree' => 'required|max:30'
        ];
    
        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            $planet = new Planet;
            $planet->title = $data["title"];
            $planet->detail = $data["detail"];
            $planet->distance = $data["distance"];
            $planet->duree = $data["duree"];
            $planet->image_path = $data["image_path"];

            $planet->save();
        } else {
            //TODO Handle your error
            dd($validator->errors()->all());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $planet = Planet::where("id",$id)->firstOrFail();
        return response()->json(
            $planet
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planet $planet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planet $planet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planet $planet)
    {
        //
    }
}
