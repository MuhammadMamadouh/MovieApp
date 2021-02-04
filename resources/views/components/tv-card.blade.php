<div class="item">
    <div class="w3l-tv-gride-agile w3l-tv-gride-agile1">
        <a href="{{route('tv.show', $tv['id'])}}" class="hvr-shutter-out-horizontal"><img
                src="{{$tv['poster_path']}}" title="album-name" class="img-responsive"
                alt=" "/>
            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
            </div>
        </a>
        <div class="mid-1 agileits_w3layouts_mid_1_home">
            <div class="w3l-tv-text">
                <h6><a href="#">{{$tv['name']}}</a></h6>
            </div>
            <div class="mid-2 agile_mid_2_home">
                <p>{{\Carbon\Carbon::parse($tv['first_air_date'])->year}}</p>
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
</div>
