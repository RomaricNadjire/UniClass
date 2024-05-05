<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
