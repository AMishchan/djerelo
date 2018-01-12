@extends('layouts.app')

@section('content')
    <div class="container add-category-container">
        <form align="center" method="post" action="{{route('admin/formcategory')}}" enctype="multipart/form-data" id="addroom">
            {{csrf_field()}}
            <p>Назва українською</p>
            <input type="text" name="name_ua">

            <p>Назва англійською</p>
            <input align="center" type="text" name='name_en'>
            <p>Зображення</p>
            <input align="center" type="file" name="img" multiple>

            <input class="btn" type="submit" name="save" value="Зберегти">
        </form>
    </div>
@endsection