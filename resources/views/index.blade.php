@extends('layout.app')
@section('content')
    <!-- banner -->
    <div id="slidey" style="display:none;">
        <ul>
            @foreach($nowPlayingMovies as $movie)
                <li><img src="{{'https://image.tmdb.org/t/p/w1280/' .$movie['backdrop_path']}}" alt=" ">
                    <p class='title'><a href="{{route('movies.show', $movie['id'])}}" style="color: #FFFFFF">{{$movie['title']}}</a></p>
                    <p class='description'>{{$movie['overview']}}</p></li>
            @endforeach

        </ul>
    </div>
    <script src="{{asset('js/jquery.slidey.js')}}"></script>
    <script src="{{asset('js/jquery.dotdotdot.min.js')}}"></script>
    <script type="text/javascript">
        $("#slidey").slidey({
            interval: 8000,
            listCount: 5,
            autoplay: true,
            showList: true
        });
        $(".slidey-list-description").dotdotdot();
    </script>
    <!-- //banner -->
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <h4 class="latest-text w3_latest_text">Now playing Movies</h4>
        <div class="container">
            <div class="w3_agile_banner_bottom_grid">
                <div id="owl-demo" class="owl-carousel owl-theme">

                </div>
            </div>
        </div>
    </div>
    <!-- //banner-bottom -->
    <div class="general_social_icons">
        <nav class="social">
            <ul>
                <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
                <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
                <li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
                <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
            </ul>
        </nav>
    </div>
    <!-- general -->
    <div class="general">
        <h4 class="latest-text w3_latest_text">Featured Movies</h4>
        <div class="container">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#featured" id="featured-tab" role="tab"
                                                              data-toggle="tab"
                                                              aria-controls="featured" aria-expanded="true">Featured</a>
                    </li>
                    <li role="presentation"><a href="#top-rated" role="tab" id="top-rated-tab" data-toggle="tab"
                                               aria-controls="top-rated" aria-expanded="false">Top viewed</a></li>
                    <li role="presentation"><a href="#latest" id="latest-tab" role="tab" data-toggle="tab"
                                               aria-controls="latest" aria-expanded="true">Top latest</a></li>
                    <li role="presentation"><a href="#upcoming" role="tab" id="upcoming-tab" data-toggle="tab"
                                               aria-controls="upcoming" aria-expanded="false">Recently Added</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="featured" aria-labelledby="featured-tab">
                        <div class="w3_agile_featured_movies">
                            @foreach($popularMovies as $movie)
                                <x-movie-card :movie="$movie" :genres="$genres"/>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="top-rated" aria-labelledby="top-rated-tab">
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m22.jpg"
                                                                                          title="album-name"
                                                                                          class="img-responsive"
                                                                                          alt=" "/>
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Assassin's Creed 3</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                        @foreach($topRatedMovies as $movie)
                            <x-movie-card :movie="$movie" :genres="$genres"/>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="latest" aria-labelledby="latest-tab">
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                    src="https://files.sexyandfunny.com/img_orig/img529030a26c11f.jpg"
                                    title="album-name"
                                    class="img-responsive image-fix"
                                    alt=" "/>
                            </a>
                        </div>
                        @foreach($latest as $movie)
                            <x-movie-card :movie="$movie" :genres="$genres"/>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="upcoming" aria-labelledby="upcoming-tab">
                        @foreach($upcoming as $movie)
                            <x-movie-card :movie="$movie" :genres="$genres"/>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //general -->

    <!-- Latest-tv-series -->
    <div class="Latest-tv-series">
        <h4 class="latest-text w3_latest_text w3_home_popular">Most Popular Movies</h4>
        <div class="container">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($latest as $movie)
                        <li>
                            <div class="agile_tv_series_grid">
                                <div class="col-md-6 agile_tv_series_grid_left">
                                    <div class="w3ls_market_video_grid1">

                                        <img src="{{$movie['poster_path']}}" alt=" " class="img-responsive "/>
                                        <a class="w3_play_icon " href="#">
                                            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 agile_tv_series_grid_right">
                                    <p class="fexi_header">{{$movie['title']}}</p>
                                    <p class="fexi_header_para"><span
                                            class="conjuring_w3">Story Line<label>:</label></span>
                                    {{$movie['overview']}}
                                    </p>
                                    <p class="fexi_header_para"><span>Date of Release<label>:</label></span>
                                        {{$movie['release_date']}}
                                    </p>
                                    <p class="fexi_header_para">
                                        <span>Genres<label>:</label> </span>
                                        <a href="#">{{$movie['genres']}}</a> |

                                    </p>
                                    <p class="fexi_header_para fexi_header_para1">
                                        <span>Star Rating<label>:</label></span>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="agileinfo_flexislider_grids">
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="#" class="hvr-shutter-out-horizontal html5lightbox"><img
                                                src="images/m2.jpg" title="album-name" class="html5lightbox img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="#">Assassin's Creed 3</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m2.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Bad Moms</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m2.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Central Intelligence</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <li>
                            <div class="agile_tv_series_grid">
                                <div class="col-md-6 agile_tv_series_grid_left">
                                    <div class="w3ls_market_video_grid1">
                                        <img src="images/olsen/olsen (3).jpg" alt=" " class="img-responsive"/>
                                        <a class="w3_play_icon1" href="#">
                                            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 agile_tv_series_grid_right">
                                    <p class="fexi_header">a haunting in cawdor</p>
                                    <p class="fexi_header_para"><span
                                            class="conjuring_w3">Story Line<label>:</label></span> Vivian Miller, sent
                                        to a rehabilitation programme for young offenders, where a theatre camp is used
                                        as an alternative to jail time. After she views tape ...</p>
                                    <p class="fexi_header_para"><span>Date of Release<label>:</label></span> Oct 09,
                                        2015 </p>
                                    <p class="fexi_header_para">
                                        <span>Genres<label>:</label> </span>
                                        <a href="genres.html">Thriller</a> |
                                        <a href="genres.html">Horror</a>
                                    </p>
                                    <p class="fexi_header_para fexi_header_para1">
                                        <span>Star Rating<label>:</label></span>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="agileinfo_flexislider_grids">
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m2.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Bad Moms</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m9.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Central Intelligence</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m7.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Light B/t Oceans</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m11.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">X-Men</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m17.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Peter</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m21.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">The Jungle Book</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="agile_tv_series_grid">
                                <div class="col-md-6 agile_tv_series_grid_left">
                                    <div class="w3ls_market_video_grid1">
                                        <img src="images/olsen/olsen (5).jpg" alt=" " class="img-responsive"/>
                                        <a class="w3_play_icon2" href="#small-dialog2">
                                            <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 agile_tv_series_grid_right">
                                    <p class="fexi_header">civil war captain America</p>
                                    <p class="fexi_header_para"><span
                                            class="conjuring_w3">Story Line<label>:</label></span> After the Avengers
                                        leaves some&nbsp;collateral damage, political pressure mounts to install a
                                        system of accountability.&nbsp;The new status quo deeply divides ...</p>
                                    <p class="fexi_header_para"><span>Date of Release<label>:</label></span> May 06,
                                        2016 </p>
                                    <p class="fexi_header_para">
                                        <span>Genres<label>:</label> </span>
                                        <a href="genres.html">Action</a> |
                                        <a href="genres.html">Adventure</a>
                                    </p>
                                    <p class="fexi_header_para fexi_header_para1">
                                        <span>Star Rating<label>:</label></span>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="agileinfo_flexislider_grids">
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m2.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Bad Moms</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m9.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Central Intelligence</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m7.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Light B/t Oceans</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m11.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">X-Men</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m17.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Peter</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img
                                                src="images/m20.jpg" title="album-name" class="img-responsive" alt=" "/>
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle"
                                                                            aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">The Secret Life of Pets</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>2016</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                           aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- flexSlider -->
            <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property=""/>
            <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
            <script type="text/javascript">
                $(window).load(function () {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function (slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- //flexSlider -->
        </div>
    </div>
    <!-- pop-up-box -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
    <!--//pop-up-box -->
    	<div id="small-dialog" class="mfp-hide">
    		<iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
    	</div>
    	<div id="small-dialog1" class="mfp-hide">
    		<iframe src="https://player.vimeo.com/video/148284736"></iframe>
    	</div>
    	<div id="small-dialog2" class="mfp-hide">
    		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
    	</div>
    <script>
        $(document).ready(function () {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- //Latest-tv-series -->
@endsection
