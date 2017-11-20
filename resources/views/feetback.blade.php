@extends('layouts.front')
@section('content')
    <div class="container review-container">
        <h2 class="mid-h">ВІДГУКИ НАШИХ КЛІЕНТІВ</h2>
        <div class="col-lg-12 col-sm-12 col-xs-12">

            <div class="review-slider-wrap">

                <div class="owl-carousel review-slider">
                    @foreach ($feedbacks as $feedback)
                        <div class="item">


                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                    <img class="img-responsive" src="img/businessman-terra.png" alt="">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <p class="rewier-name">{{$feedback['first_name']}}</p>
                                    <p class="review">{{$feedback['feetback']}}</p>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>


            </div>
        </div>

    </div>
    <form id="feetback" align="center" method="post" action="{{ route('sendfeedback') }}">
        {{csrf_field()}}
        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Имя" required>
        <br>
        <textarea name="feetback" form="feetback" placeholder="Отзыв" required></textarea>
        <br>
        <input type="submit" name="submit" value="Отправить">

    </form>

@endsection