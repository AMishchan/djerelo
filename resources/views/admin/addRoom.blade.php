@extends('layouts.app')

@section('content')
    <div class="container room-add-admin">
        <form align="center" method="post" action="{{route('addroom')}}" enctype="multipart/form-data" id="addroom">
            {{csrf_field()}}
            <p>Номер кімнати</p>
            <input class="admin-input-field" type="text" name="room_number">

            <p>Короткий опис українською</p>
        <textarea class="admin-input-field" name="short_description_ua" cols="1000" maxlength="1000"
                  form="addroom"></textarea>
            <p>Короткий опис англійською</p>
        <textarea class="admin-input-field" name="short_description_en" cols="1000" maxlength="1000"
                  form="addroom"></textarea>

            <p>Повний опис українською</p>
        <textarea class="admin-input-field" name="full_description_ua" cols="2000" maxlength="2000"
                  id="addroom"></textarea>
            <p>Повній опис англійською</p>
        <textarea class="admin-input-field" name="full_description_en" cols="2000" maxlength="2000"
                  id="addroom"></textarea>
            <p>Категорія</p>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name_ua']}}</option>
                @endforeach
            </select>
            <p>Головне фото</p>
            <input class="admin-input-field" type="file" name="main_img" multiple>

            <input class="btn" type="submit" name="save" value="Зберегти">
        </form>
    </div>
@endsection