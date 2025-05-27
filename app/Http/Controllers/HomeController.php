<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured projects
        $featuredProjects = Project::where('is_featured', true)
            ->take(3)
            ->get();
            
        // Get services
        $services = Service::take(3)->get();
        
        // Get testimonials
        $testimonials = Testimonial::take(3)->get();
        
        return view('pages.home', [
            'featuredProjects' => $featuredProjects,
            'services' => $services,
            'testimonials' => $testimonials
        ]);
    }
}
