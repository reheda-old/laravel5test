<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //
    protected $fillable = [
        'slug', 'title', 'excerpt', 'content', 'published', 'published_at',
    ];
    public function getPublishedPosts()
    {
        $posts = $this->latest('published_at')->published()->get();

        return $posts;
    }


    public function scopePublished($query)
    {
        $query
            ->where('published_at', '<=', Carbon::now())
            ->where('published', '=', 1);
    }


    public function getUnpublishedPosts(){
        $posts = $this->latest('published_at')->unPublished()->get();
        return $posts;
    }


    public function scopeUnPublished($query)
    {
        $query
            ->where('published_at', '>', Carbon::now())
            ->orWhere('published', '=', 0);
    }

}
