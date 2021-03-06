<?php

namespace Laravel\Nova\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the user that the posts belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the posts comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Get all of the tags for this posts.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable')->withPivot('admin');
    }
}
