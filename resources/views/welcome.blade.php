@extends('layouts.front')
@section('content')
    <div class="logo col-sm-2 col-xs-3 col-lg-2 col-md-2">
        <img class="img-responsive" src="img/logo-jerelo.png" alt="logo">
    </div>

    <div class="container slider-top-container">

        <div class="span12">
            <div class="owl-carousel top-slider">

                <div class="item">
                    <img src="img/sliderimg/main-sl.png" alt="hotelmaim1">
                </div>

            </div>
        </div>
        <div class="container info-slider-container">
            <div class="row slider-bottom-info">
                <p>@lang('welcome.city')<p>
                <p>@lang('welcome.address')</p>
                <p>@lang('welcome.telNumber') +3(044)272-46-04, 272 46 05, 272 02 92</p>
            </div>
        </div>
    </div>

    <div class="container about-hotel">
        <h4 class="mid-h">@lang('welcome.aboutHotel')</h4>
        <div>
            <img class="img-responsive" src="style/img/sliderimg/about-hotel.png" alt="">
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <p class="advantage-info"> 
                    @lang('welcome.description')
                </p>
            </div>

        </div>
    </div>
    <div class="container advantage">
        <h4 class="mid-h">@lang('welcome.ourAdvantages')</h4>
        <div class="col-sm-12">
            <p>
                @lang('welcome.sertificate')
            </p>
        </div>

        <div class="col-sm-3">
            <img class="img-responsive" src="img/conversation.png" alt="conversation">
            <p>
                @lang('welcome.bigRoom')
            </p>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive" src="img/serve.png" alt="serve">
            <p>
                @lang('welcome.num15')
            </p>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive" src="img/rest.png" alt="rest">
            <p>
                @lang('welcome.ser1') <br>
                @lang('welcome.ser2')<br>
                @lang('welcome.ser3')<br>
                @lang('welcome.ser4')<br>- wi-fi
            </p>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive" src="img/parking.png" alt="parking">
            <p>
                @lang('welcome.parking')
            </p>
        </div>

        <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-12 col-xs-12">
                <p class="advantage-info"> <strong>
                        @lang('welcome.ser6')</strong><br>
                    @lang('welcome.ser7')<br>
                    @lang('welcome.ser8')<br>
                    @lang('welcome.ser9') <br>
                    @lang('welcome.ser10')<br>
                    @lang('welcome.ser11') <br>

                    <strong>   @lang('welcome.restoran')</strong>
                    @lang('welcome.hotelComplex')
                    <strong>@lang('welcome.time')</strong>,
                    @lang('welcome.dinner')
                    <br>

                </p>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-12 col-xs-12">
                <p class="advantage-info"><strong> @lang('welcome.freeServ')</strong><br>
                    @lang('welcome.deliveryLuggage')<br>
                    @lang('welcome.parkingAuto')<br>
                    @lang('welcome.deliveryPress')<br>
                    @lang('welcome.internet') <br>
                    @lang('welcome.shoesCleaner')<br>
                    @lang('welcome.emergencyCall')<br>
                    @lang('welcome.taxiCall')<br>
                    @lang('welcome.ticketsOrder')<br>
                    @lang('welcome.reveille')<br>
                    @lang('welcome.medicine')<br>
                    @lang('welcome.iron')<br>
                    @lang('welcome.safe')<br>

                </p>
            </div>
        </div>

    </div>



@endsection