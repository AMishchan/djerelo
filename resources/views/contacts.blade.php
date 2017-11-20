@extends('layouts.front')
@section('content')
    <div class="container callback-container">
        <div class="row">
            <h3 class="mid-h">КОНТАКТИ</h3>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-header">
                <h4>Готель <q>Джерело</q></h4>
                @foreach($contacts as $contact)

                    <p>Адреса: {{$contact['address_ua']}}<br>
                        Тел. {{$contact['phone']}}<br>
                        Email: {{$contact['email']}}
                    </p>
                @endforeach
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="callback-form">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 callback-info">
                        <h4 class="mid-h">Зв’яжіться з нами</h4>
                        <div class="callback-accost">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <span>Звернення</span>
                            </div>
                            <form name="sendmail" class="contact_form" action="{{ route('sendmessage') }}" method="post">
                                {{csrf_field()}}
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6"><input type="radio" id="pan" name="gender" value="pan" checked/>
                                    <label for="pan">Пан</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <input type="radio" name="gender" id="pani" value="pani"/>
                                    <label for="pani">Пані</label>
                                </div>
                                <p><input type="text" placeholder=" П.І.Б" name="firstname"/></p>
                                <p><input type="email" name=" email" placeholder="E-mail"/></p>
                                <p><input type="tel" name=" phone" placeholder="Телефон"/></p>
                                <p><input type="text" name=" message" placeholder="Повідомлення"/></p>
                                <p><input class="input-button" type="submit" value="ВІДПРАВИТИ"/></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection