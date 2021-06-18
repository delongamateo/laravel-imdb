<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Movie extends Model
{
    use HasFactory;

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }
}
