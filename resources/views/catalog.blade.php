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




    </div>


@endsection