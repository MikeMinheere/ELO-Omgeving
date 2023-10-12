<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klassen extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function users()
    {
        return $this->hasMany(User::class,'class_name');
    }
}