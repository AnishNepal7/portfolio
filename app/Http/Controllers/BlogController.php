<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        // Get all blog posts
        $posts = BlogPost::orderBy('created_at', 'desc')->get();
        
        return view('pages.blog', [
            'posts' => $posts
        ]);
    }
    
    public function show($id)
    {
        // Get specific blog post
        $post = BlogPost::findOrFail($id);
        
        // Get recent posts
        $recentPosts = BlogPost::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
            
        return view('pages.blog-detail', [
            'post' => $post,
            'recentPosts' => $recentPosts
        ]);
    }
}
