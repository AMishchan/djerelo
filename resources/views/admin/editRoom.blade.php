@extends('layouts.app')

@section('content')
    <form  align="center" method="post"  enctype="multipart/form-data" id="addroom">
        {{csrf_field()}}
        @foreach($roomData as $room)
            <p>Номер комнаты</p>
            <input type="text" value="{{$room['room_number']}}" name="room_number">
            <p>Краткое описание на русском языке</p>
            <textarea name="short_description_ru" cols="1000" maxlength="1000">{{ $room['short_description_ru'] }}</textarea>
            <p>Краткое описание на Украинском языке</p>
            <textarea name="short_description_ua" cols="1000" maxlength="1000" form="addroom">{{ $room['short_description_ua'] }}
    </textarea>
            <p>Краткое описание на Английском языке</p>
            <textarea name="short_description_en" cols="1000" maxlength="1000" form="addroom">{{ $room['short_description_en'] }}
        </textarea>
            <p>Полное описание  на русском языке</p>
            <textarea name="full_description_ru" cols="2000" maxlength="2000" id="addroom">{{$room['full_description_ru']}}</textarea>
            <p>Полное  описание на Украинском языке</p>
            <textarea name="full_description_ua" cols="2000" maxlength="2000" id="addroom">{{$room['full_description_ua']}}</textarea>
            <p>Полное  описание на Английском языке</p>
            <textarea name="full_description_en" cols="2000" maxlength="2000" id="addroom">{{$room['full_description_en']}}</textarea>
           <p>Категория</p>
           <select name="category_id">
        <option value="{{$room['category_id']}}" default="true">{{$room['name_ru']}} </option> 
    @foreach($categories as $category)
    <option value="{{$category['id']}}">{{$category['name_ru']}}</option>
    @endforeach    
    </select>
            <p>Основное фото</p>
            <img src="../../uploads/{{$room['main_img']}}">
            <p>Для изменения основного фото, выберите новое изображение</p>
            <input type="file" name="main_img" size="10" multiple>

            <input type="submit"  value="Сохранить">
        @endforeach
    </form>
@endsection