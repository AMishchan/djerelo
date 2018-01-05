@extends('layouts.app')
@section('content')
    <div class="container room-images">
        <div class="img-loader">
            <button class="btn" name="image" onclick="document.getElementById('fileUpload').click()">Завантажити фото</button>
            <form method="post" enctype="multipart/form-data" align="center">
                {{csrf_field()}}
                <input type="file" id="fileUpload" name="image" style="display:none" multiple/>
                <input class="btn" type="hidden" name="room_id" value="{{$_GET['id']}}">
                <input class="btn" type="submit" name="addimage" value="Сохранить">
            </form>
        </div>
        @foreach($sliderImages as $image)
            <form method="post" action="{{ route('imageDelete',['image'=> $image['id']]) }}">
                <div class="col-md-5">
                    <div class="col-md-7">
                        <img class="img img-responsive" src="../../uploads/{{$image['image']}}">
                    </div>
                    <div class="col-md-3">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn">delete</button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
    <script></script>
@endsection