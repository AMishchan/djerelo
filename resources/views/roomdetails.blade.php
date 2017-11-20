@extends('layouts.front')
@section('content')
    <div class="container apt-card">
        <h4 class="mid-h">КАРТКА НОМЕРА</h4>
        <div class="container">
            <div class="row apt-card-row">
                @foreach($rooms as $room)
                    <img class="img-responsive" src="uploads/{{$room['main_img']}}" alt="">
                    <p class="apt-range"><q>Кімната номер: {{$room['room_number']}}</q></p>
                @endforeach
                <div class="span12">
                    <div class="owl-carousel apt-card-slider">
                        @foreach($images as $image)
                            <div class="item"><img class="img-responsive" src="uploads/{{$image['image']}}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="container">
                    @foreach ($rooms as $room)
                        <div class="row apt-description">
                            <h4>Опис номеру:</h4>
                            <p class="list-header">{{$room['short_description_ua']}}</p>
                            <p class="list-f list-header"> {{$room['full_description_ua']}}</p>
                            <div class="row">
                                <button class="btn btn-default apt-description-btn">Забронювати</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection