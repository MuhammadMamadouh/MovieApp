<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{


    public $popularMovies, $genres, $nowPlayingMovies, $topRatedMovies, $latest, $upcoming;

    /**
     * MoviesViewModel constructor.
     *
     * @param $popularMovies
     * @param $nowPlayingMovies
     * @param $topRatedMovies
     * @param $genres
     * @param $latest
     * @param $upcoming
     */
    public function __construct($popularMovies, $nowPlayingMovies, $topRatedMovies, $genres, $latest, $upcoming)
    {
        $this->popularMovies = $popularMovies;
        $this->genres = $genres;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->topRatedMovies  = $topRatedMovies;
        $this->latest = $latest;
        $this->upcoming= $upcoming;
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function popularMovies()
    {
        return $this->formatMovies($this->popularMovies);
    }

    /**
     * @return mixed
     */
    public function nowPlayingMovies()
    {
        return $this->formatMovies($this->nowPlayingMovies);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
public function topRatedMovies()
    {
        return $this->formatMovies($this->topRatedMovies);
    }
    /**
     * @return \Illuminate\Support\Collection
     */
public function latest()
    {
        return $this->formatMovies($this->topRatedMovies);
    }
    /**
     * @return \Illuminate\Support\Collection
     */
public function upcoming()
    {
        return $this->formatMovies($this->topRatedMovies);
    }


    public function formatMovies($movies)
    {
        return collect($movies)->take(6)->map(function ($movie) {
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 . '%',
                'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ]);
        });
    }

    /**
     * @return mixed
     */
    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }


}
