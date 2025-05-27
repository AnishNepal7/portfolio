<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        // Get all projects
        $projects = Project::all();
        
        return view('pages.projects', [
            'projects' => $projects
        ]);
    }
    
    public function show($id)
    {
        // Get specific project
        $project = Project::findOrFail($id);
        
        // Get related projects
        $relatedProjects = Project::where('id', '!=', $id)
            ->take(3)
            ->get();
            
        return view('pages.project-detail', [
            'project' => $project,
            'relatedProjects' => $relatedProjects
        ]);
    }
}
