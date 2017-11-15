@extends('layouts.front')
@section('content')
<div class="container callback-container">
    <div class="row">
        <h3 class="mid-h">КОНТАКТИ</h3>
        <div class="col-sm-6 col-xs-6 contact-header">
            <h4>Готель<q>Джерело</q></h4>
        @foreach($contacts as $contact)
       
            <p>Адреса: {{$contact['address_ua']}}<br>
                Тел. {{$contact['phone']}}<br>
                Email: {{$contact['email']}}
            </p>
        @endforeach
        </div>
        
        <div class="col-sm-6 ">
            <div class="callback-form">
                <div class="col-sm-9 col-xs-9 callback-info">
                    <h4 class="mid-h">Зв’яжіться з нами</h4>


                    <div class="callback-accost">
                        <div class="col-sm-4 col-xs-4">
                            <span>Звернення</span>
                        </div>
                       <form name="sendmail" action="{{ route('sendmessage') }}" method="post">
                       {{csrf_field()}}
                        <div class="col-sm-4 col-xs-4"> <input type="radio" id="pan" name="gender" value="pan" checked/>
                            <label for="pan">Пан</label>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <input type="radio" name="gender" id="pani" value="pani"/>
                            <label for="pani">Пані</label>
                        </div>
                    </div>


                    <p><input type="text" placeholder="П.І.Б" name="firstname"/></p>
                    <p><input type="email" name="email" placeholder="E-mail"/></p>
                    <p><input type="tel" name="phone" placeholder="Телефон"/></p>
                    <p><input type="text" name="message" placeholder="Повідомлення"/></p>
                    <p><input class="input-button" type="submit" value="ВІДПРАВИТИ"/></p>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>

@endsection