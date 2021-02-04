<?php

use Illuminate\Support\Facades\Http;
if (!function_exists('getAPI')) {
    function getAPI($url, $results = null)
    {
        $token = env('TMDB_TOKEN');;
        $jsonApi = Http::withToken($token)->get($url)->json();
        if ($results != null)
            return $jsonApi[$results];
        else
            return $jsonApi;
    }
}
