<?php

namespace App\Http\Controllers;

use App\ViewModels\ActorsViewModel;
use App\ViewModels\ActorViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param int $page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($page = 1)
    {
        abort_if($page > 500, 204);
        $popularActorsUrl = 'https://api.themoviedb.org/3/person/popular?page=' . $page;
        $popularActors = $this->getAPI($popularActorsUrl, 'results');

        $viewModel = new ActorsViewModel($popularActors, $page);

        return view('actors.index', $viewModel);

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
        $actorUrl = 'https://api.themoviedb.org/3/person/' . $id;
        $actor = collect($this->getAPI($actorUrl));

        $socialUrl = $actorUrl . '/external_ids';
        $social = collect($this->getAPI($socialUrl));

        $creditsUrl = $actorUrl . '/combined_credits';
        $credits = collect($this->getAPI($creditsUrl));

        $viewModel = new ActorViewModel($actor, $social, $credits);


        return view('actors.show', $viewModel);
//        return view('actors.show', ['actor' => $actor]);
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
