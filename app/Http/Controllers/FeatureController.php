<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feature = Feature::all();
        return view('feature.index', compact('feature'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feature.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'string|required',
            'desc'          => 'string|required',
        ]);

        Feature::create([
            'title'     => $request->input('title'),
            'desc'      => $request->input('desc'),
        ]);

        return redirect()->route('admin.features.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $feature = Feature::find($id);
        return route('feature.edit', compact('feature'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'         => 'string|required',
            'desc'          => 'string|required',
        ]);

            $shark = Feature::find($id);
            $shark->title     = $request->input('title');
            $shark->desc      = $request->input('input');
            $shark->save();

            return redirect()->route('admin.features.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feature = Feature::find($id);
        $feature->delete();

        return redirect()->route('admin.features.index');
    }
}
