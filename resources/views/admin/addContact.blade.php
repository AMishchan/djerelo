@extends('layouts.app')

@section('content')
<form  align="center" method="post" action="{{route('contacts/add')}}" enctype="multipart/form-data" id="addcontact">
    {{csrf_field()}}
  <p>Телефон</p>
  <input type="text" name="phone">
 <p>E-Mail</p>
    <input align="center" type="email" name='email'>
 <p>Адрес на Украинском языке</p>
    <input align="center" type="text" name='address_ua'>
    <p>Адрес на Русском языке</p>
    <input align="center" type="text" name='address_ru'>
    <p>Адрес на Английском языке</p>
    <input align="center" type="text" name='address_en'>
     
        <input type="submit" name="save" value="Сохранить">
        </form>
@endsection