<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{

    public $search = '';

    public function render()
    {

        $searchResults = [];
        if (strlen($this->search) >= 2) {
            $searchResultsUrl = 'https://api.themoviedb.org/3/search/movie?query=' . $this->search;
            $searchResults = $this->getAPI($searchResultsUrl, 'results');
        }

        return view('livewire.search-dropdown', [
            'searchResults' => $searchResults
        ]);
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
