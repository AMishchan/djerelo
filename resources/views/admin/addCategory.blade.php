@extends('layouts.app')

@section('content')
    <div class="container add-category-container">
        <form align="center" method="post" action="{{route('admin/formcategory')}}" enctype="multipart/form-data">
            id="addroom">
            {{csrf_field()}}
            <p>Название на Украинском языке</p>
            <input type="text" name="name_ua">
            <p>Название на Русском языке</p>
            <input align="center" type="text" name='name_ru'>
            <p>Название на Английском языке</p>
            <input align="center" type="text" name='name_en'>
            <p>Изображение</p>
            <input align="center" type="file" name="img" multiple>

            <input type="submit" name="save" value="Сохранить">
        </form>
    </div>
@endsection