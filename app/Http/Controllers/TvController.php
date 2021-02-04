<?php

namespace App\Http\Controllers;

use App\ViewModels\MovieViewModel;
use App\ViewModels\TvViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $popularTvUrl = 'https://api.themoviedb.org/3/tv/popular';
        $popularTv = $this->getAPI($popularTvUrl, 'results');

        $topRatedTvUrl = 'https://api.themoviedb.org/3/tv/top_rated';
        $topRatedTv = $this->getAPI($topRatedTvUrl, 'results');

        $genresUrl = 'https://api.themoviedb.org/3/genre/tv/list';
        $genres = $this->getAPI($genresUrl, 'genres');

        $viewModel = new TvViewModel($popularTv, $topRatedTv, $genres);

        return view('tv.index', $viewModel);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $movieUrl = 'https://api.themoviedb.org/3/tv/' . $id;
        $movie = $this->getAPI($movieUrl, '');

        $genresUrl = 'https://api.themoviedb.org/3/genre/movie/list';
        $genresArray = $this->getAPI($genresUrl, 'genres');

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        $viewModel = new TvViewModel($movie);
        return view('tv.show', $viewModel);
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
        return 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIxMTIyZjNhMWQxODM3MWUwZDExZmJjNDgxZWJkYTczNSIsInN1YiI6IjYwMTI5MTNlMGU1OTdiMDAzZjM4YjEyZiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.XwZ8A1hVe5x5imFSeDrSktnDvzidxQAXzfkICDYXAiw';
    }

}
