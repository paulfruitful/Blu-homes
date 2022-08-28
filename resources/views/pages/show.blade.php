@extends('layouts.boiler');

@section('content')
<div class="container-sm">
    <!-- Content here -->
  
<div class="container-fluid">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
  </svg>
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
    <div class="col align-self-center">
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