<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movie = Movie::paginate(10);
        dd($movie);

        return view("index", compact('movie'));

    
    }

    public function horror() {
        $horrorMovie = Movie::with("genres")
            ->whereHas('genres', function (Builder $query) {
                $query->whereIn('slug', ['horror']);
            })
            ->paginate(10)
            //->toSql()
            ;
        return view('horror', compact('horrorMovie'));
    }

    public function comedy() {
        $comedyMovie = Movie::with("genres")
            ->whereHas('genres', function (Builder $query) {
                $query->whereIn('slug', ['comedy']);
            })
            ->paginate(10)
            //->toSql()
            ;
        return view('comedy', compact('comedyMovie'));
    }

    public function drama() {
        $dramaMovie = Movie::with("genres")
            ->whereHas('genres', function (Builder $query) {
                $query->whereIn('slug', ['drama']);
            })
            ->paginate(10)
            //->toSql()
            ;
        return view('drama', compact('dramaMovie'));
    }
}
