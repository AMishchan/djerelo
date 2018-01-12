@extends('layouts.app')

@section('content')
    <div class="container add-contact">

        <form method="post" action="{{route('contacts/add')}}" enctype="multipart/form-data"
              id="addcontact">
            {{csrf_field()}}
            <p>Телефон</p>
            <input type="text" name="phone">
            <p>E-Mail</p>
            <input align="center" type="email" name='email'>
            <p>Адреса українською</p>
            <input align="center" type="text" name='address_ua'>

            <p>Адреса англійською</p>
            <input align="center" type="text" name='address_en'>
            <input class="btn" type="submit" name="save" value="Зберегти">
        </form>

    </div>
@endsection