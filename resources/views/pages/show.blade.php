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
@if($blog->created_at===$blog->updated_at)
<small><b>Created at {{$blog->created_at}}</b></small>

    
@else
<small><b>Updated at {{$blog->updated_at}}</b></small>
@endif
@auth
<div class="container-sm">
<a href="/blog/{{$blog->id}}/edit" class="btn btn-primary">Edit Post</a>
<form action="/blog/{{$blog->id}}" method="POST" >
    @method('DELETE')
    @csrf
<input type="submit" value="Delete" class="btn btn-warning">
</form>
</div>
</div>
</div>
</div>
@else
<div></div>
@endauth

@endsection