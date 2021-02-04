@extends('layout.app')
@section('css')
    {{--    <link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css" media="all">--}}
@section('content')

    <!-- single -->
    <div class="single-page-agile-main">
        <div class="container">
            <div class="single-page-agile-info">
                <!-- /movie-browse-agile -->
                <div class="show-top-grids-w3lagile">
                    <div class="col-sm-12 single-left">
                        <div class="video-grid-single-page-agileits col-md-5">
                            <img src="{{$actor['profile_path']}}" alt=""
                                 class="img-responsive"/>
                            <div class="square-box border fa-border">
                                <a href="{{$social['facebook']}}"><i class="fa fa-facebook-square fa-3x"></i></a>
                                <a href="{{$social['instagram']}}"><i class="fa fa-instagram fa-3x"></i></a>
                                <a href="{{$social['twitter']}}"><i class="fa fa-twitter-square fa-3x"></i></a>
                                <a href="#"><i class="fa fa-home fa-3x"></i></a>
                            </div>
                        </div>
                        <div class="song-grid-right col-md-7">
                            <div class="share">
                                <div class="song-info">
                                    <h3>{{$actor['name']}}</h3>
                                    <p>{{$actor['birthday']}} ({{$actor['age']}} years old)</p>
                                    <p>born in {{$actor['place_of_birth']}}</p>
                                </div>

                                <div class="single-agile-shar-buttons">
                                    <p>{{$actor['biography']}}</p>
                                </div>
                                <div class="single-agile-shar-buttons">
                                    <h3 class="header"> Known for</h3>
                                    @foreach($knownForMovies as $movie)
                                        <div class="item col-md-3">
                                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                                <a href="{{route('movies.show', $movie['id'])}}"
                                                   class="hvr-shutter-out-horizontal"><img
                                                        src="{{$movie['poster_path']}}"
                                                        title="album-name"
                                                        class="img-responsive"
                                                        alt=" "/>
                                                </a>
                                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                    <div class="w3l-movie-text">
                                                        <h6>
                                                            <a href="{{route('movies.show', $movie['id'])}}">{{$movie['title']}}</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //movie-browse-agile -->
                <!--body wrapper start-->
                <div class="list-group">
                    <h3 class="header">Credits </h3>
                    <ul>
                        @foreach($credits as $credit)
                            <li class="h5">{{$credit['release_year']}} &middot;
                                <strong>{{$credit['title']}} </strong> as
                                <strong>{{$credit['character']}}</strong></li>
                        @endforeach
                    </ul>
                </div>
                <div class="w3_agile_banner_bottom_grid">
                    <div id="owl-demo" class="owl-carousel owl-theme">

                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m15.jpg"
                                                                                              title="album-name"
                                                                                              class="img-responsive"
                                                                                              alt=" "/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">God’s Compass</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--body wrapper end-->


            </div>
            <!-- //w3l-latest-movies-grids -->
        </div>
    </div>

@endsection
