<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'image',
        'tags',
        'github_url',
        'demo_url',
        'is_featured',
    ];
    
    protected $casts = [
        'tags' => 'array',
        'is_featured' => 'boolean',
    ];
}
