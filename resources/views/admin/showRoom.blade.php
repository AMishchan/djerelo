@extends('layouts.app')

@section('content')
    <div class="container">
        <p>Отображение комнат</p>
        <a href="{{route('admin/rooms/add')}}">Добавить комнату </a>
        <table border="1" id="roomstable">
            <tr>
                <td>Изображение</td>
                <td>№ комнаты</td>
                <td>Категория</td>
                <td></td>
            </tr>
            @foreach($rooms as $room)
                <tr>
                    <td>
                        <img src="../uploads/{{$room['main_img']}}">
                    </td>
                    <td>{{$room['room_number']}}</td>
                    <td>{{$room['name_ru']}}</td>
                    <td>
                        <a href="{{route('edit', ['id'=>$room['ID']])}}">Редактировать</a>
                        <br>
                        <a href="{{route('admin/rooms/images', ['id'=>$room['ID']])}}">Изображения комнаты</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection