<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial = Testimonial::all();

        return view('testimonial.index', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonial.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'string|required',
            'desc'          => 'string|required',
        ]);

        Testimonial::create([
            'name'      => $request->input('name'),
            'desc'      => $request->input('desc'),
        ]);

        return redirect()->route('admin.testimonial.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        
        return view('testimonial.detail', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        
        return view('testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'          => 'string|required',
            'desc'          => 'string|required',
        ]);

        $testimonial->update($request->all());
        // Testimonial::update([
        //     'name'      => $request->input('name'),
        //     'desc'      => $request->input('desc'),
        // ]);

        return redirect()->route('admin.testimonial.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonial.index');
    }
}
