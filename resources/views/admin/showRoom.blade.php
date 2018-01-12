@extends('layouts.app')

@section('content')
    <div class="container show-room">
        <h3 class="mid-h">Відображення кімнати</h3>

        <a class="btn show-room-btn" href="{{route('admin/rooms/add')}}">Додати кімнату</a>

        <table border="1" id="roomstable">
            <tr>
                <td>Зображення</td>
                <td>№ кімнати</td>
                <td>Категорія</td>
                <td>Дії</td>
            </tr>
            @foreach($rooms as $room)
                <tr>
                    <td>
                        <img src="../uploads/{{$room['main_img']}}">
                    </td>
                    <td>{{$room['room_number']}}</td>
                    <td>{{$room['name_ua']}}</td>
                    <td>
                        <a class="btn show-room-btn" href="{{route('edit', ['id'=>$room['ID']])}}">Редагувати</a>
                        <br>
                        <a class="btn show-room-btn" href="{{route('admin/rooms/images', ['id'=>$room['ID']])}}">Зображення кімнати</a>


                        <form action="{{route('deleteRoom', ['room'=>$room['ID']])}}" method="post">
                            {{--<input type="hidden" name="_method" value="DELETE">--}}
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn">
                                @if($room['status'] == 1)
                                    {{'Не відображати кімнату'}}
                                    @else
                                    {{'Відобразити кімнату'}}
                                    @endif
                            </button>
                        </form>
                </tr>
            @endforeach
        </table>

    </div>
@endsection