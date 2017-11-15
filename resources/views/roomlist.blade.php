@extends('layouts.front')
@section('content')
    
    <div class="container">
    <h4 class="mid-h"></h4>
    <div class="row">
        <img class="img-responsive rooms-cat-top-img" src="img/rooms-img/1.png" alt="">
        <p class="cat-top-img-desc"><span>LUX</span></p>
    </div>


    <div class="row room-categories">

        <div class="col-sm-6">
            <img class="img-responsive" src="img/rooms-img/3.png" alt="l">
        </div>
        <div class="col-sm-6">
            <div class="row">
                <p class="rooms-cat-num"><q>Кімната 31</q></p>
           <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="rooms-cat-slider-wrap">
                        <div class="owl-carousel rooms-cat-slider">
                            <div class="item"><img class="img-responsive" src="img/rooms-img/1.png" alt=""></div>
                            <div class="item"><img class="img-responsive" src="img/rooms-img/2.png" alt=""></div>
                            <div class="item"><img class="img-responsive" src="img/rooms-img/3.png" alt=""></div>
                            <div class="item"><img class="img-responsive" src="img/rooms-img/4.png" alt=""></div>

                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                <p class="rooms-cat-num-desc-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
                <button type="button" class="btn btn-default btn-rooms-cat">
                    Детальніше
                </button>
            </div>
        </div>
    </div>
@endsection