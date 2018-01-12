@extends('layouts.front')
@section('content')
    <div class="container callback-container">
        <div class="row">
            <h3 class="mid-h">@lang('contacts.contact')</h3>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-header">
                <h4>@lang('contacts.hotel') <q>@lang('contacts.name')</q></h4>
                @foreach($contacts as $contact)

                    <p>@lang('contacts.address'): {{$contact['address_ua']}}<br>
                        @lang('contacts.telephone'). {{$contact['phone']}}<br>
                        Email: {{$contact['email']}}
                    </p>
                @endforeach
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="callback-form">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 callback-info">
                        <h4 class="mid-h">@lang('contacts.callingUs')</h4>
                        <div class="callback-accost">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <span>@lang('contacts.accost')</span>
                            </div>
                            <form name="sendmail" class="contact_form" action="{{ route('sendmessage') }}" method="post">
                                {{csrf_field()}}
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6"><input type="radio" id="pan" name="gender" value="pan" checked/>
                                    <label for="pan">@lang('contacts.male')</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <input type="radio" name="gender" id="pani" value="pani"/>
                                    <label for="pani">@lang('contacts.female')</label>
                                </div>
                                <p><input type="text" placeholder="@lang('contacts.abrr')" name="firstname"/></p>
                                <p><input type="email" name=" email" placeholder="E-mail"/></p>
                                <p><input type="tel" name=" phone" placeholder="@lang('contacts.telephone')"/></p>
                                <p><input type="text" name=" message" placeholder="@lang('contacts.message')"/></p>
                                <p><input class="input-button" type="submit" value="@lang('contacts.send')"/></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection