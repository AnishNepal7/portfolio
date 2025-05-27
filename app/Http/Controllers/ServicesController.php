<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        // Get all services
        $services = Service::all();
        
        return view('pages.services', [
            'services' => $services
        ]);
    }
}
