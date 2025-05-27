<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'image',
        'category',
        'published_at',
    ];
    
    protected $casts = [
        'published_at' => 'datetime',
    ];
}
