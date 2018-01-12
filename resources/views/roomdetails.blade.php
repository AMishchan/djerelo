@extends('layouts.front')
@section('content')
    <div class="container apt-card">
        <h4 class="mid-h">@lang('catalog.numCard')</h4>
        <div class="container">
            <div class="row apt-card-row">

                @foreach($rooms as $room)
                    <img class="img-responsive" src="uploads/{{$room['main_img']}}" alt="">
                    <p class="apt-range"><q>@lang('catalog.roomNum') {{$room['room_number']}}</q></p>
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
                            <h4>@lang('catalog.descRoom')</h4>
                            <p class="list-header">{{$room['short_description_ua']}}</p>
                            <p class="list-f list-header"> {{$room['full_description_ua']}}</p>
                            <div class="row">
                                <button href="#myModal" class="btn btn-default apt-description-btn" data-toggle="modal">@lang('catalog.reserve')</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                    <div class="bron-form">
                        <h4 class="mid-h">@lang('catalog.onlineBooking')</h4>
                        <form action="{{route('preorder')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="arrival">@lang('catalog.arrival')</label>
                                        <input type="date" class="tcal" id="arrival" name="arrival" value="" required/>

                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="departure" class="departure">@lang('catalog.departure')</label>
                                        <input type="date" class="tcal" id="departure" name="departure" value="" required/>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-4">
                                        <label for="rooms-num">@lang('catalog.rooms')</label>
                                        <select class="form-control" id="rooms-num" name="rooms_quantity">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-xs-4">
                                        <label for="adult-num">@lang('catalog.adult')</label>
                                        <select class="form-control " id="adult-num" name="adults">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-xs-4">
                                        <label for="child-num">@lang('catalog.children')</label>
                                        <select class="form-control" id="child-num" name="kids">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>@lang('catalog.yourName')</p>
                                        <p><input type="text" name="name" placeholder="" required/></p>

                                    </div>
                                    <div class="col-sm-6">
                                        <p>@lang('catalog.yourTelephone')</p>
                                        <p><input type="tel" name="phone" placeholder="" required/></p>
                                    </div>
                                    <input type="hidden" name="room_id" value="{{$rooms[0]['ID']}}">
                                    <input type="hidden" name="room_number" value="{{$rooms[0]['room_number']}}">
                                </div>
                                <p class="bottom-info"><strong>@lang('catalog.telephone') +3(044)272-46-04, 272 46 05, 272 02 92</strong></p>
                                <p class="bottom-info"><strong>Email:</strong>qwertyu@mail.com</p>
                                <div class="row">
                                    <button type="submit" class="btn btn-default" >@lang('catalog.send')</button>
                                </div>

                            </div>
                        </form>
                    </div>





        </div>


    </div>
@endsection