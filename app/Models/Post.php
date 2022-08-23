<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ["title", "description", "content"]; # Passes fields only you allow.

    protected $guarded = []; # this does not prevent mass assignment
}
