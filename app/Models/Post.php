<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ["title", "description", "content"]; # Passes fields only you allow.

    protected $guarded = []; # this does not prevent mass assignment

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    # Post is responsible for adding its own comment.
    public function addComment($body){
        #set also the id of the post associated to this comment
        return $this->comments()->create(compact('body'));
    }
}
