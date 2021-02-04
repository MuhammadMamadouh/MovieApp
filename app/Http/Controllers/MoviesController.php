<?php

namespace App\Http\Controllers;

use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{

    public function index()
    {

        $popularMovies = getAPI('https://api.themoviedb.org/3/movie/popular', 'results');


        $nowPlayingMovies = getAPI('https://api.themoviedb.org/3/movie/now_playing', 'results');

        $topRated = getAPI('https://api.themoviedb.org/3/movie/top_rated', 'results');

        $latest = getAPI('https://api.themoviedb.org/3/movie/latest');

        $upcoming = getAPI('https://api.themoviedb.org/3/movie/upcoming', 'results');


        $genres = getAPI('https://api.themoviedb.org/3/genre/movie/list', 'genres');

        $viewModel = new MoviesViewModel($popularMovies, $nowPlayingMovies, $topRated, $genres, $latest, $upcoming);

        return view('index', $viewModel);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $movieUrl = 'https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images';
        $movie = $this->getAPI($movieUrl, '');


        $genresArray = $this->getAPI('https://api.themoviedb.org/3/genre/movie/list', 'genres');

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        $viewModel = new MovieViewModel($movie);
        return view('show', $viewModel);
    }


    /**
     * Get API of a Specific key
     *
     * @param string $url
     * @param string $results
     *
     * @return mixed
     */
    private function getAPI($url, $results = null)
    {
        $token = $this->getToken();
        $jsonApi = Http::withToken($token)->get($url)->json();
        if ($results != null)
            return $jsonApi[$results];
        else
            return $jsonApi;
    }

    /**
     * Get token from api
     * @return string
     */
    private function getToken()
    {
        return env('TMDB_TOKEN');

    }


}
