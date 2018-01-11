@extends('layouts.front')

@section('content')
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
    <div class="container apt-catalog">
        <h4 class="mid-h">@lang('catalog.numCatalog')</h4>
        <div class="">
            <img class="img-responsive" src="" alt="">
        </div>

        @foreach($categories as $category)
            <div class="row room-categories">
                <div class="col-sm-6">
                    <img class="img-responsive" src="img/rooms-img/{{$category['img']}}" alt="category-photo">
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <p class="room-class"><q>{{$category['name_ua']}}</q></p>
                        <button type="button" class="btn btn-default btn-detailed" onclick="location.href='roomlist?id={{$category['id']}}'">
                            @lang('catalog.readMore')
                        </button>
                    </div>
                </div>
            </div>
        @endforeach


        <div class="row bron-row">
            <div class="bron-form">
                <h4 class="mid-h">@lang('catalog.onlineBooking')</h4>
                <form action="preorder" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <label for="arrival">@lang('catalog.arrival')</label>
                                <input type="text" class="tcal" id="arrival" name="arrival" value=""/>

                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="departure" class="departure">@lang('catalog.departure')</label>
                                <input type="text" class="tcal" id="departure" name="departure" value=""/>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-xs-4">
                                <label for="rooms-num">@lang('catalog.rooms')</label>
                                <select class="form-control" id="rooms-num" name="rooms_quontaty">
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
                                <p><input type="text" name="name" placeholder=""/></p>

                            </div>
                            <div class="col-sm-6">
                                <p>@lang('catalog.yourTelephone')</p>
                                <p><input type="tel" name="phone" placeholder=""/></p>
                            </div>
                        </div>
                        <p class="bottom-info"><strong>@lang('catalog.telephone') +3(044)272-46-04, 272 46 05, 272 02 92</strong></p>
                        <p class="bottom-info"><strong>Email:</strong>qwertyu@mail.com</p>
                        <div class="row">
                            <button class="btn btn-default">@lang('catalog.send')</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>


    </div>


@endsection