@extends('layouts.app')

@section('content')
    <div class="container show-contacts">
        <h1>Существующие контактные данные</h1>
        <a class="btn" href="contacts/add">Добавить Контакты </a>
        <table>
            <tr>

                <td>Телефон</td>
                <td>E-Mail</td>
                <td>Адрес на Украинском языке</td>
                <td>Адрес на Русском языке</td>
                <td>Адрес на Английском языке</td>

                <td></td>
            </tr>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact['phone']}}</td>
                    <td>{{$contact['email']}}</td>
                    <td>{{$contact['address_ua']}}</td>
                    <td>{{$contact['address_ru']}}</td>
                    <td>{{$contact['address_en']}}</td>

                    <td><a class="btn" href="contacts/edit?id={{$contact['id']}}">Редактировать </a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection