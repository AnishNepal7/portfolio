<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Experience;

class AboutController extends Controller
{
    public function index()
    {
        // Get skills grouped by category
        $skills = Skill::all()->groupBy('category');
        
        // Get experiences
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        
        return view('pages.about', [
            'skills' => $skills,
            'experiences' => $experiences
        ]);
    }
}
