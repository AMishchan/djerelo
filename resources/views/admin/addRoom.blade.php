@extends('layouts.app')

@section('content')
<form  align="center" method="post" action="{{route('addroom')}}" enctype="multipart/form-data" id="addroom">
    {{csrf_field()}}
  <p>Номер комнаты</p>
  <input class="admin-input-field" type="text" name="room_number">
    <p>Краткое описание на русском языке</p>
    <textarea  class="admin-input-field" name="short_description_ru" cols="1000" maxlength="1000" ></textarea>
     <p>Краткое описание на Украинском языке</p>
    <textarea class="admin-input-field" name="short_description_ua" cols="1000" maxlength="1000" form="addroom"></textarea>
        <p>Краткое описание на Английском языке</p>
        <textarea class="admin-input-field" name="short_description_en" cols="1000" maxlength="1000" form="addroom"></textarea>
            <p>Полное описание  на русском языке</p>
            <textarea class="admin-input-field" name="full_description_ru" cols="2000" maxlength="2000" id="addroom"></textarea>
                <p>Полное  описание на Украинском языке</p>
                <textarea class="admin-input-field" name="full_description_ua" cols="2000" maxlength="2000" id="addroom"></textarea>
              <p>Полное  описание на Английском языке</p>
                <textarea class="admin-input-field" name="full_description_en" cols="2000" maxlength="2000" id="addroom"></textarea>
           <p>Категория</p>
           <select name="category_id">
               @foreach($categories as $category)
               <option value="{{$category['id']}}">{{$category['name_ru']}}</option>
               @endforeach
           </select>
            <p>Основное фото</p>
            <input class="admin-input-field" type="file" name="main_img" multiple>
            
        <input type="submit" name="save" value="Сохранить">
        </form>
@endsection