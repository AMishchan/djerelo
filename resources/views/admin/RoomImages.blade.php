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
        <form method="post" action="deleteimage">
            @foreach($roomImages as $image)


                <div class="row imgs-row">
                    <div class="col-md-7">
                        <img class="img img-responsive" src="../../uploads/{{$image['image']}}">
                        <input type="checkbox" value="{{$image['image']}}">
                    </div>
                </div>

            @endforeach
            <div class="row">
                <input class="btn" type="submit" name="delete" value="Удалить">
            </div>
        </form>

    </div>
@endsection