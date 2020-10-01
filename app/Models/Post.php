<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * Sorts Posts by latest Post First
     *
     */
    public function scopeLatestFirst ($query)
    {
        return $query->orderBy('created_at','desc');
    }

     /**
     * This Scope Allows sorting by how "popular" or how many views a post has
     *
     */
    public function scopePopular ($query)
    {
        return $query->orderBy('view_count','desc');
    }

     /**
     * Determines when a post is considered "Published"
     *
     */
    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now());
    }
}
