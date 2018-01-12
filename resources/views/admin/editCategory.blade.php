@extends('layouts.app')

@section('content')
    <div class="container edit-category-admin">

    <form align="center" method="post" enctype="multipart/form-data" id="editcategory">
        {{csrf_field()}}
        @foreach($categoryData as $category)
            <p>Назва українською</p>
            <input type="text" value="{{$category['name_ua']}}" name="name_ua">

            <p>Назва англійською</p>
            <input align="center" type="text" name='name_en' value="{{$category['name_en']}}">
            <p>Зображення</p>
            <img src="../img/rooms-img/{{$category['img']}}">
            <p>Щоб змінити фото, виберіть нове зображення</p>
            <input type="file" name="img" size="10" multiple>


            <input class="btn" type="submit" value="Зберегти">
        @endforeach
    </form>
    </div>
@endsection