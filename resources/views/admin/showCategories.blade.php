@extends('layouts.app')

@section('content')
    <div class="container show-category-admin">

        <p>Відображення категорій</p>
        <a class="btn" href="{{route('admin/formcategory')}}">Додати категорію </a>
        <table border="1" id="categoriestable">
            <tr>
                <td>Зображення</td>

                <td>Назва Українською</td>
                <td>Назва Англійською</td>

                <td></td>
            </tr> 
            @foreach($categories as $category)
                <tr>
                    <td>
                        <img src="../img/rooms-img/{{$category['img']}}">
                    </td>

                    <td>{{$category['name_ua']}}</td>
                    <td>{{$category['name_en']}}</td>

                    <td>
                        <a class="btn" href="{{route('admin/editcategory', ['id'=>$category['id']])}}">Редагувати</a>


                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection