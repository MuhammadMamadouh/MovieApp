<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{

    public $popularActors;
    public $page;

    /**
     * ActorsViewModel constructor.
     *
     * @param $popularActors
     * @param $page
     */
    public function __construct($popularActors, $page)
    {
        $this->popularActors = $popularActors;
        $this->page = $page;
    }


    public function popularActors()
    {
        return collect($this->popularActors)->map(function ($actor) {
            return collect($actor)->merge([
                'profile_path' => $actor['profile_path'] ? 'https://image.tmdb.org/t/p/w500/' . $actor['profile_path'] : 'https://ui-avatars.com/api/?size=253&name=' . $actor['name'],
                'known_for' => collect($actor['known_for'])->where('media_type', 'movie')->pluck('title')->take(2)->union(
                    collect($actor['known_for'])->where('media_type', 'tv')->pluck('name')
                )->implode(', '),
            ])->only([
                'name', 'id', 'profile_path', 'known_for'
            ]);
        })->take(16);
    }

    /**
     * Go to previous Page
     *
     * @return int|null
     */
    public function previous()
    {
        return $this->page > 1 ? $this->page-- : null;
    }

    /**
     * Go to next Page
     *
     * @return int|null
     */
    public function next()
    {
        return $this->page < 500 ? $this->page++ : null;
    }
}
