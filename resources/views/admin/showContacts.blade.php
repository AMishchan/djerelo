@extends('layouts.app')

@section('content')
    <div class="container show-contacts">
        <h1>Існуючі контактні данні</h1>
        <a class="btn" href="contacts/add">Додати контакти</a>
        <table>
            <tr>

                <td>Телефон</td>
                <td>E-Mail</td>
                <td>Адреса українською</td>

                <td>Адреса англіїською</td>

                <td></td>
            </tr>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact['phone']}}</td>
                    <td>{{$contact['email']}}</td>
                    <td>{{$contact['address_ua']}}</td>
                    <td>{{$contact['address_en']}}</td>
                    <td><a class="btn" href="contacts/edit?id={{$contact['id']}}">Редагувати</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection