@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
        <div class="row admin-home">

            <div class="col-lg-4 col-sm-3">
                <p>
                    <a href="/djerelo/public/admin/rooms">Комнаты</a></p>
            </div>
            <div class="col-lg-4 col-sm-3">
                <p>
                    <a href="/djerelo/public/admin/contacts">Контакты</a></p>
            </div>
            <div class="col-lg-4 col-sm-3"><p>
                    <a href="/djerelo/public/admin/showcategories">Категории</a></p>
            </div>


        </div>
    </div>
@endsection
