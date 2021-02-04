<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $genres = getAPI('https://api.themoviedb.org/3/genre/movie/list', 'genres');
        \Illuminate\Support\Facades\View::share('genres', $genres);
    }
}
