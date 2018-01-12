@extends('layouts.app')

@section('content')
    <div class="container room-edit">
        <form align="center" method="post" enctype="multipart/form-data" id="addroom">
            {{csrf_field()}}
            @foreach($roomData as $room)
                <p>Номер кімнати</p>
                <input type="text" value="{{$room['room_number']}}" name="room_number">

                <p>Короткий опис українською</p>
                <textarea name="short_description_ua" cols="1000" maxlength="1000" form="addroom">{{ $room['short_description_ua'] }}
                </textarea>
                <p>Короткий опис англійською</p>
                <textarea name="short_description_en" cols="1000" maxlength="1000" form="addroom">{{ $room['short_description_en'] }}
                </textarea>

                <p>Повний опис українською</p>
                <textarea name="full_description_ua" cols="2000" maxlength="2000"
                          id="addroom">{{$room['full_description_ua']}}</textarea>
                <p>Повний опис англійською</p>
                <textarea name="full_description_en" cols="2000" maxlength="2000"
                          id="addroom">{{$room['full_description_en']}}</textarea>
                <p>Категорія</p>
                <select name="category_id">
                    <option value="{{$room['category_id']}}" default="true">{{$room['name_ua']}} </option>
                    @foreach($categories as $category)
                        <option value="{{$category['id']}}">{{$category['name_ua']}}</option>
                    @endforeach
                </select>
                <p>Головне фото</p>
                <img src="../../uploads/{{$room['main_img']}}">
                <p>Щоб змінити фото, виберіть нове зображення</p>
                <input type="file" name="main_img" size="10" multiple>

                <input class="btn" type="submit" value="Зберегти">
            @endforeach
        </form>
    </div>
@endsection