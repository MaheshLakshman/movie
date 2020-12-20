<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreMovieRequest;

class MovieController extends Controller
{
    public $movie;

    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }
    public function store(StoreMovieRequest $request)
    {
        $data = $request->validated();
        $file = $request->file('image');

        $file->move(public_path('uploads'), $file->getClientOriginalName());

        $this->movie->create([
            'theaters' => $data['theaters'],
            'movie' => $data['movie'],
            'show_date' => $data['show_date'],
            'no_seats' => $data['no_seats'],
            'time_show' => $data['time_show'],
            'image' => $file->getClientOriginalName(),
        ]);

        return redirect('home')->with('success', "Saved successfully");
     }

     public function get($id)
     {
         $data = $this->movie->find($id);

        return $data;
     }
}
