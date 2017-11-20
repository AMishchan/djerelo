@extends('layouts.front')

@section('content')

    <div class="container">
        <h4 class="mid-h"></h4>
        <div class="row">
            @foreach ($categories as $category)
                <img class="img-responsive rooms-cat-top-img" src="img/rooms-img/{{$category['img']}}" alt="">

                <p class="cat-top-img-desc"><span>{{$category['name_ua']}}</span></p>
        </div>

        @endforeach
        @foreach($rooms as $room)

            <div class="row room-categories">
                <div class="col-sm-6">
                    <img class="img-responsive" src="uploads/{{$room['main_img']}}" alt="l">
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <p class="rooms-cat-num"><q>Кімната {{$room['room_number']}}</q></p>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="rooms-cat-slider-wrap">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="rooms-cat-num-desc-text">{{$room['short_description_ua']}}
                            </p>
                        </div>
                        <button type="button" class="btn btn-default btn-rooms-cat"
                                onclick="location.href='roomdetails?id={{$room['ID']}}'">
                            Детальніше

                        </button>
                    </div>
                </div>

            </div>
    @endforeach

@endsection