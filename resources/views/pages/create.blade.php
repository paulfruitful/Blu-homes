@extends('layouts.boiler');

@section('content')
<form action="{{url('blog')}}" method="POST">
    <label >Title: <input type="text" name="title" placeholder="Title"></label>
     <label>Body: <input type="text" name="body" placeholder="Body"></label>
     
     <input type="submit" value="Submit">

</form>
@endsection