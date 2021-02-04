@extends('layout.app')
@section('css')
    <!-- news-css -->
    <link rel="stylesheet" href="{{asset('news-css/news.css')}}" type="text/css" media="all"/>
    <!-- //news-css -->
    <!-- list-css -->
    <link rel="stylesheet" href="{{asset('list-css/list.css')}}" type="text/css" media="all"/>
    <!-- //list-css -->
@endsection
@section('content')
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
    <!-- faq-banner -->
    <div class="faq">
        <div class="container">

            <div class="agileinfo-news-top-grids">
                <div class="col-md-8 wthree-top-news-left">
                    <div class="wthree-news-left">
                        <div class="wthree-news-left-img">
                            <img src="{{$movie['poster_path']}}"
                                 alt=""/>
                            <h4>{{$movie['title']}}</h4>
                            <div class="s-author">
                                <p>{{$movie['genres']}}
                                    {{--                                    @foreach($movie['genres'] as $genre)--}}
                                    {{--                                        <a href="#">{{$genre['name']}}</a> @if(!$loop->last), @endif &nbsp;&nbsp;--}}
                                    {{--                                    @endforeach--}}
                                    <i class="fa fa-calendar" aria-hidden="true"></i> release date:
                                    <b>  {{$movie['release_date']}}</b>
                                    <a
                                        href="#"><i class="fa fa-comments" aria-hidden="true"></i> Comments (10)</a></p>
                            </div>
                            <div id="fb-root"></div>

                            <div class="w3-agile-news-text">
                                <p>{{$movie['overview']}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="browse-agile-w3ls general-w3ls">
                        <div class="tittle-head">

                            <div class="container">
                                <div class="agileits-single-top">
                                    <h4 class="latest-text" style="margin-left: 0">Cast </h4>
                                </div>
                                <div class="browse-inner-come-agile-w3">
                                    @foreach($movie['cast'] as $cast)
                                        @if($loop->index < 10)
                                            <div class="col-md-2 w3l-movie-gride-agile">
                                                <a href="#" class="hvr-shutter-out-horizontal">
                                                    <img class="img-responsive"
                                                         src="https://image.tmdb.org/t/p/w300/{{$cast['profile_path']}}"
                                                         title="#" alt=" "/>
                                                </a>
                                                <div class="mid-1">
                                                    <div class="w3l-movie-text">
                                                        <h6><a href="#">{{$cast['name']}} ({{$cast['character']}})</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="browse-agile-w3ls general-w3ls">
                        <div class="tittle-head">
                            <h4 class="latest-text" style="margin-left: 0">Images </h4>
                        </div>
                        <div class="container">
                            <!-- /latest-movies1 -->
                            <div class="browse-inner-come-agile-w3">
                                @foreach($movie['images'] as $image)
                                    @if($loop->index < 10)
                                        <div class="col-md-2 w3l-movie-gride-agile">
                                            <a href="#" class="hvr-shutter-out-horizontal">
                                                <img class="img-responsive"
                                                     src="https://image.tmdb.org/t/p/w500/{{$image['file_path']}}"
                                                     title="#" alt=" "/>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wthree-news-right">
                    <!-- news-right-top -->
                    <div class="news-right-top">
                        <div class="wthree-news-right-heading">
                            <h3>Updated News</h3>
                        </div>
                        <div class="wthree-news-right-top">
                            <div class="news-grids-bottom">
                                <!-- date -->
                                <div id="design" class="date">
                                    <div id="cycler">
                                        <div class="date-text">
                                            <a href="show.blade.php">August 15,2016</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="date-text">
                                            <a href="show.blade.php">July 08,2016 <span class="blinking"><img
                                                        src="images/new.png" alt=""/></span></a>
                                            <p>Nullam non turpis sit amet metus tristique egestas et et orci.</p>
                                        </div>
                                        <div class="date-text">
                                            <a href="show.blade.php">February 15,2016</a>
                                            <p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
                                        </div>
                                        <div class="date-text">
                                            <a href="show.blade.php">January 15,2016 <span class="blinking"><img
                                                        src="images/new.png" alt=""/></span></a>
                                            <p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat
                                                sit amet.</p>
                                        </div>
                                        <div class="date-text">
                                            <a href="show.blade.php">September 24,2016</a>
                                            <p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
                                        </div>
                                        <div class="date-text">
                                            <a href="show.blade.php">August 15,2016</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="date-text">
                                            <a href="show.blade.php">July 08,2016 <span class="blinking"><img
                                                        src="images/new.png" alt=""/></span></a>
                                            <p>Nullam non turpis sit amet metus tristique egestas et et orci.</p>
                                        </div>
                                        <div class="date-text">
                                            <a href="show.blade.php">February 15,2016</a>
                                            <p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
                                        </div>
                                        <div class="date-text">
                                            <a href="show.blade.php">January 15,2016 <span class="blinking"><img
                                                        src="images/new.png" alt=""/></span></a>
                                            <p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat
                                                sit amet.</p>
                                        </div>
                                        <div class="date-text">
                                            <a href="show.blade.php">September 24,2016</a>
                                            <p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
                                        </div>
                                    </div>
                                    <script>
                                        function blinker() {
                                            $('.blinking').fadeOut(500);
                                            $('.blinking').fadeIn(500);
                                        }

                                        setInterval(blinker, 1000);
                                    </script>
                                    <script>
                                        function cycle($item, $cycler) {
                                            setTimeout(cycle, 2000, $item.next(), $cycler);

                                            $item.slideUp(1000, function () {
                                                $item.appendTo($cycler).show();
                                            });
                                        }

                                        cycle($('#cycler div:first'), $('#cycler'));
                                    </script>
                                </div>
                                <!-- //date -->
                            </div>
                        </div>
                    </div>
                    <!-- //news-right-top -->
                    <!-- news-right-bottom -->
                    <div class="news-right-bottom">
                        <div class="wthree-news-right-heading">
                            <h3>Top News</h3>
                        </div>
                        <div class="news-right-bottom-bg">
                            <div class="news-grids-bottom">
                                <div class="top-news-grid">
                                    <div class="top-news-grid-heading">
                                        <a href="show.blade.php">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Aenean rutrum ac nulla</a>
                                    </div>
                                    <div class="w3ls-news-t-grid top-t-grid">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i> Vivamus nibh</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="top-news-grid">
                                    <div class="top-news-grid-heading">
                                        <a href="show.blade.php">Duis orci enim, rutrum vel sodales ut, tincidunt nec
                                            turpis.</a>
                                    </div>
                                    <div class="w3ls-news-t-grid top-t-grid">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i> Cras pretium</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="top-news-grid">
                                    <div class="top-news-grid-heading">
                                        <a href="show.blade.php">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Aenean rutrum ac nulla</a>
                                    </div>
                                    <div class="w3ls-news-t-grid top-t-grid">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i> Vivamus nibh</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="top-news-grid">
                                    <div class="top-news-grid-heading">
                                        <a href="show.blade.php">Duis orci enim, rutrum vel sodales ut, tincidunt nec
                                            turpis.</a>
                                    </div>
                                    <div class="w3ls-news-t-grid top-t-grid">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i> Cras pretium</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //news-right-bottom -->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="w3l-latest-movies-grids">
            <h4 class="latest-text w3_latest_text">Latest Movies</h4>
            <div class="container">
                <!-- /latest-movies -->
                <div class="browse-inner">
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg"
                                                                                      title="album-name" alt=" "/>
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Light B/t Oceans</a></h6>
                            </div>
                            <div class="mid-2">

                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m8.jpg"
                                                                                      title="album-name" alt=" "/>
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">The BFG</a></h6>
                            </div>
                            <div class="mid-2">

                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg"
                                                                                      title="album-name" alt=" "/>
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Central Intelligence</a></h6>
                            </div>
                            <div class="mid-2">

                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m10.jpg"
                                                                                      title="album-name" alt=" "/>
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Don't Think Twice</a></h6>
                            </div>
                            <div class="mid-2">

                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg"
                                                                                      title="album-name" alt=" "/>
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">X-Men</a></h6>
                            </div>
                            <div class="mid-2">

                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="#" title="album-name"
                                                                                      alt=" "/>
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Greater</a></h6>
                            </div>
                            <div class="mid-2">

                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
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

                    <div class="clearfix"></div>
                </div>
                <!-- //latest-movies -->

            </div>
        </div>
    </div>
    <!-- //faq-banner -->

@endsection
