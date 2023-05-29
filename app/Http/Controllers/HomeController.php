<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $service = Service::all();
        $testimonial = Testimonial::all();

        return view('homepage', compact('service', 'testimonial'));
    }
}
