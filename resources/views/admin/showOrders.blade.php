@extends('layouts.app')

@section('content')
<div class=" show-category-admin">

    <p>Відображення замовлень</p>

    <table border="1" id="categoriestable">
        <tr>
            <td>Прибуття</td>
            <td>Відправлення</td>
            <td>Дата замовлення</td>
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
    <td>{{$order['order_date']}}</td>
    <td>{{$order['adults']}}</td>
    <td>{{$order['rooms_quantity']}}</td>
    <td>{{$order['kids'] }}</td>
    <td>{{$order['name']}}</td>
    <td>{{$order['phone']}}</td>
    <td>{{$order['room_id']}}</td>
    <td>{{$order['room_number']}}</td>
    <td><button type="button" class="btn order-btn btn-default {{$order['button_class']}}" onclick="location.href='checkorders?id={{$order['id']}}'">{{$order['button_text']}}</button><br>
        <button type="button" class="btn order-btn btn-danger btn-default " onclick="location.href='delorder?id={{$order['id']}}'">Видалити</button>
    </td>

 </tr>


        @endforeach
    </table>

</div>
@endsection