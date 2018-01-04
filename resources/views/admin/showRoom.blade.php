@extends('layouts.app')

@section('content')
    <div class="container show-room">
        <h3 class="mid-h">Отображение комнат</h3>

        <a class="btn show-room-btn" href="{{route('admin/rooms/add')}}">Добавить комнату </a>

        <table border="1" id="roomstable">
            <tr>
                <td>Изображение</td>
                <td>№ комнаты</td>
                <td>Категория</td>
                <td>Действия</td>
            </tr>
            @foreach($rooms as $room)
                <tr>
                    <td>
                        <img src="../uploads/{{$room['main_img']}}">
                    </td>
                    <td>{{$room['room_number']}}</td>
                    <td>{{$room['name_ru']}}</td>
                    <td>
                        <a class="btn show-room-btn" href="{{route('edit', ['id'=>$room['ID']])}}">Редактировать</a>
                        <br>
                        <a class="btn show-room-btn" href="{{route('admin/rooms/images', ['id'=>$room['ID']])}}">Изображения комнаты</a>


                        <form action="{{route('deleteRoom', ['room'=>$room['ID']])}}" method="post">
                            {{--<input type="hidden" name="_method" value="DELETE">--}}
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn">Видалити кімнату</button>
                        </form>
                </tr>
            @endforeach
        </table>

    </div>
@endsection