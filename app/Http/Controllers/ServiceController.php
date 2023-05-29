<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();

        return view('service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'string|required',
            'desc'          => 'string|required',
            'image'         => 'image|mimes:jpeg,png,jpg|nullable',
        ]);

        // dd($request);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinasionPath = 'uploads/';

            $profileImage = $image->getClientOriginalName();
            $filepath = $destinasionPath . $profileImage;
            $image->move($destinasionPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            $filepath = NULL;
        }  


        Service::create([
            'title'     => $request->input('title'),
            'desc'      => $request->input('desc'),
            'image'     => $filepath
        ]);

        return redirect()->route('admin.service.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::where('id', $id)->first();

        return view('service.detail', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::where('id', $id)->first();
        
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'         => 'string|required',
            'desc'          => 'string|required',
            'image'         => 'image|mimes:jpeg,png,jpg|nullable',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinasionPath = 'uploads/';

            $profileImage = $image->getClientOriginalName();
            $filepath = $destinasionPath . $profileImage;
            $image->move($destinasionPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            $filepath = NULL;
        }  

        Service::update([
            'title'     => $request->input('title'),
            'desc'      => $request->input('desc'),
            'image'     => $filepath
        ]);

        return redirect()->route('admin.service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.service.index');
    }
}
