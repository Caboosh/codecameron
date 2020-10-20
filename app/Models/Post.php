<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,);
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
        return $query->where("created_at", "<=", Carbon::now());
    }

     /**
     * Gets the Published Date and Returns it in a human readable format
     *
     */
    public function getDateAttribute ($value)
    {
        return is_null($this->created_at) ? '' : $this->created_at->diffForHumans();
    }
    public function dateFormatted($showTimes = false)
    {
        $format = 'd/m/Y';
        if ($showTimes) $format = $format . ' H:i:s';
        return $this->created_at->format($format);
    }
    
     /**
     * Changes the Publication State Depending on the Publication Date
     *
     */
    public function publicationLabel()
    {
        if ( ! $this->created_at ) {
            return '<span class="label label-warning">Draft</span>';
        } elseif ($this->created_at && $this->created_at->isFuture()) {
            return '<span class="label label-info">Scheduled</span>';
        } else {
            return '<span class="label label-success">Published</span>';
        }
    }
}
