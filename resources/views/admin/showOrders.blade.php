@extends('layouts.app')

@section('content')
<div class="container show-category-admin">
    {{--{{dump($orders[0]['kids'])}}--}}
    <p>Відображення замовлень</p>

    <table border="1" id="categoriestable">
        <tr>
            <td>Прибуття</td>
            <td>Відправлення</td>
            <td>Кількість дорослих</td>
            <td>Кількість кімнат</td>
            <td>Кількість дітей</td>
            <td>Ім’я</td>
            <td>Номер телефону</td>
            <td>ID кімнати</td>
            <td>Номер кімнати</td>
            <td>Статус замовлення</td>
        </tr>
@foreach($orders as $order)
    <tr>
    <td>{{$order['arrival']}}</td>
    <td>{{$order['departure']}}</td>
    <td>{{$order['adults']}}</td>
    <td>{{$order['rooms_quantity']}}</td>
    <td>{{$order['kids'] }}</td>
    <td>{{$order['name']}}</td>
    <td>{{$order['phone']}}</td>
    <td>{{$order['room_id']}}</td>
    <td>{{$order['room_number']}}</td>
    <td><button type="button" class="btn btn-default {{$order['button_class']}}" onclick="location.href='orderCheck?status={{$order['order']}}}'">{{$order['button_text']}}</button></td>

 </tr>


        @endforeach
    </table>

</div>
@endsection