<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('css/contactstyle.css')}}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('css/faqstyle.css')}}" type="text/css" media="all"/>
    <link href="{{asset('css/single.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('css/medile.css')}}" rel='stylesheet' type='text/css'/>
@yield('css')
<!-- banner-slider -->
    <link href="{{asset('css/jquery.slidey.min.css')}}" rel="stylesheet">
    <!-- //banner-slider -->
    <!-- pop-up -->
    <link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- //pop-up -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <!-- //font-awesome icons -->
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- js -->
    <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <!-- //js -->
    <!-- banner-bottom-plugin -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 5,
                itemsDesktop: [640, 4],
                itemsDesktopSmall: [414, 3]

            });

        });
    </script>
    <!-- //banner-bottom-plugin -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
          rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <script type="text/javascript">
        var html5lightbox_options = {
            watermark: "",
            watermarklink: "",
            freemark: ""
        };
    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('html5lightbox/html5lightbox.js')}}"></script>
</head>

<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="w3layouts_logo">
            <a href="{{url('/')}}"><h1>One<span>Movies</span></h1></a>
        </div>
        <livewire:search-dropdown></livewire:search-dropdown>

        <div class="clearfix"></div>
    </div>
</div>
<!-- //header -->
<script>
    $('.toggle').click(function () {
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });
</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
<div class="movies_nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        @php
            $genresArray = ($genres->chunk(4))->toArray();
        @endphp

        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    @foreach($genresArray   as $key => $genres)
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($genres as $key => $genre)
                                                    <li><a href="#">{{$genre}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="series.html">tv - series</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="genres.html">Asia</a></li>
                                            <li><a href="genres.html">France</a></li>
                                            <li><a href="genres.html">Taiwan</a></li>
                                            <li><a href="genres.html">United States</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="genres.html">China</a></li>
                                            <li><a href="genres.html">HongCong</a></li>
                                            <li><a href="genres.html">Japan</a></li>
                                            <li><a href="genres.html">Thailand</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="genres.html">Euro</a></li>
                                            <li><a href="genres.html">India</a></li>
                                            <li><a href="genres.html">Korea</a></li>
                                            <li><a href="genres.html">United Kingdom</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="short-codes.html">Short Codes</a></li>
                        <li><a href="list.html">A - z list</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //nav -->

@yield('content')
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h2>Subscribe to us</h2>
                    <div class="w3ls_footer_grid_left1_pos">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Your email..." required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 w3ls_footer_grid_right">
                <a href="{{url('/')}}"><h2>One<span>Movies</span></h2></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-5 w3ls_footer_grid1_left">
            <p>&copy; 2016 One Movies. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
        <div class="col-md-7 w3ls_footer_grid1_right">
            <ul>
                <li>
                    <a href="genres.html">Movies</a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->
@livewireScripts
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
@yield('scripts')
<!-- //here ends scrolling icon -->
</body>
</html>
