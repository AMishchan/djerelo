@extends('layouts.app')

@section('content')
    <div class="container">
        <p>Отображение категорий</p>
        <a href="{{route('admin/formcategory')}}">Добавить категорию </a>
        <table border="1" id="categoriestable">
            <tr>
                <td>Изображение</td>
                <td>Название на Русском</td>
                <td>Название на Украинском</td>
                <td>Название на Английском</td>
               
                <td></td>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>
                        <img src="../img/rooms-img/{{$category['img']}}">
                    </td>
                    <td>{{$category['name_ru']}}</td>
                    <td>{{$category['name_ua']}}</td>
                    <td>{{$category['name_en']}}</td>
                   
                    <td>
                        <a href="{{route('admin/editcategory', ['id'=>$category['id']])}}">Редактировать</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection