<div class="col-md-2 w3l-movie-gride-agile">
    <a href="{{route('movies.show', $movie['id'])}}" class="hvr-shutter-out-horizontal"><img
            src="{{$movie['poster_path']}}" title="album-name"
            class="img-responsive"
            alt=" "/>
        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
        </div>
    </a>
    <div class="mid-1 agileits_w3layouts_mid_1_home">
        <div class="w3l-movie-text">
            <h6><a href="{{route('movies.show', $movie['id'])}}">{{$movie['title']}}</a></h6>
        </div>
        <div class="mid-2 agile_mid_2_home">
            <p>{{\Carbon\Carbon::parse($movie['release_date'])->year}}</p>
            <div class="block-stars">
                <ul class="w3l-ratings">
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
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
