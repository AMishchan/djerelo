@extends('layouts.app')

@section('content')
<form method="post" enctype="multipart/form-data" align="center">
{{csrf_field()}}
<input  type="file" name="image" size="10" multiple>
<input type="hidden" name="room_id" value="{{$_GET['id']}}">
<input  type="submit" name="addimage" value="Сохранить">
</form>
<form method="post" action="deleteimage">
@foreach($roomImages as $image)
 <input type="checkbox" value="{{$image['image']}}">   
    <img src="../../uploads/{{$image['image']}}">

@endforeach
<input type="submit" name="delete" value="Удалить">
</form>
@endsection