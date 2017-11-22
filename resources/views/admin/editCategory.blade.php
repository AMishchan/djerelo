@extends('layouts.app')

@section('content')
    <div class="container edit-category-admin">
    <form align="center" method="post" enctype="multipart/form-data" id="editcategory">
        {{csrf_field()}}
        @foreach($categoryData as $category)
            <p>Название на Украинском языке</p>
            <input type="text" value="{{$category['name_ua']}}" name="name_ua">
            <p>Название на русском языке</p>
            <input align="center" type="text" name='name_ru' value="{{$category['name_ru']}}">
            <p>Название на Английском языке</p>
            <input align="center" type="text" name='name_en' value="{{$category['name_en']}}">
            <p>Изображение</p>
            <img src="../img/rooms-img/{{$category['img']}}">
            <p>Для изменения фото, выберите новое изображение</p>
            <input type="file" name="img" size="10" multiple>


            <input class="btn" type="submit" value="Сохранить">
        @endforeach
    </form>
    </div>
@endsection