@extends('layout.app')
@section('content')


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
        <h4 class="latest-text w3_latest_text">Popular Actors</h4>
        <div class="container">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        <div class="w3_agile_featured_movies popularActors">
                            @foreach($popularActors as $actor)
                                <div class="col-md-3 w3l-movie-gride-agile actor">
                                    <a href="{{route('actors.show', $actor['id'])}}" class="hvr-shutter-out-horizontal">
                                        <img src="{{$actor['profile_path']}}"
                                             title="{{$actor['name']}}" class="img-responsive" alt=" "/>
                                    </a>
                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                        <div class="w3l-movie-text">
                                            <h6><a href="#">{{$actor['name']}}</a></h6>
                                        </div>
                                        <div>
                                            <p>
                                                {{$actor['known_for']}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    {{--                    <nav aria-label="Page navigation example">--}}
                    {{--                        <ul class="pagination justify-content-center">--}}
                    {{--                            <li class="page-item disabled">--}}
                    {{--                                <a class="page-link" href="/actors/page/" {{$previous}} tabindex="-1">Previous</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="page-item">--}}
                    {{--                                <a class="page-link" href={{url("actors/page/" . $next)}}> Next</a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </nav>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- //general -->

@endsection
@section('scripts')
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        let elem = document.querySelector('.w3_agile_featured_movies');
        let infScroll = new InfiniteScroll(elem, {
            // options
            path: '/actors/page/@{{#}}',
            append: '.actor',
            // history: false,
        });
    </script>
@endsection
