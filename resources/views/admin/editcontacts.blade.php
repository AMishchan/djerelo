@extends('layouts.app')

@section('content')
    <div class="container edit-contact">
        <form align="center" method="post" id="editcontact">
            {{csrf_field()}}
            @foreach($contactData as $contact)
                <p>Телефон</p>
                <input type="text" value="{{$contact['phone']}}" name="phone">
                <p>E-mail</p>
                <input align="center" type="email" name='email' value="{{$contact['email']}}">
                <p>Адрес на Украинском языке</p>
                <input align="center" type="text" name='address_ua' value="{{$contact['address_ua']}}">
                <p>Адрес на Русском языке</p>
                <input align="center" type="text" name='address_ru' value="{{$contact['address_ru']}}">
                <p>Адрес на Английском языке</p>
                <input align="center" type="text" name='address_en' value="{{$contact['address_en']}}">

                <input class="btn" type="submit" value="Сохранить">
            @endforeach
        </form>
    </div>
@endsection