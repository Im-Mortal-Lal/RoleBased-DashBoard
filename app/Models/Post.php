<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'category_id', 'color', 'image', 'body', 'tags', 'is_published', 'published_at'];

    protected $casts = [
        'tags' => 'array',
        'is_published' => 'boolean',
        'published_at' => 'date',
    ];

    function category()
    {
        return $this->belongsTo(Category::class);
    }
}
