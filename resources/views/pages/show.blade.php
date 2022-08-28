@extends('layouts.boiler');

@section('content')
<div class="container-sm">
    <!-- Content here -->
  
<div class="container-fluid">
<div class="container text-center">
<h1 class="display-4">{!!$blog->title!!}</h1>
</div>
<div class="row">
@if($blog->pics)
<div class="col-sm-12">
    <div class="container-fluid">
    <div class="container text-center">
<img src=" /storage/{{$blog->pics}}" class="rounded float-start"></div></div></div>
@else

<img src="">
@endif

    <p>{!!$blog->body!!}</p>

@auth
<div class="container-sm">
<div class="row">
    <div class="col align-self-start">
    
<small><b>Created at {{$blog->created_at}}</b></small>
</div>
    <div class="col align-self-start">
<a href="/blog/{{$blog->id}}/edit" class="btn btn-warning">Edit Post</a></div>
   <div class="col align-self-end">
<form action="/blog/{{$blog->id}}" method="POST" >
    @method('DELETE')
    @csrf
<input type="submit" value="Delete" class="btn btn-danger">
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@else
<div></div>
@endauth

@endsection