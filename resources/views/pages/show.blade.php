@extends('layouts.boiler');

@section('content')

<img src="/storage/{{$blog->pics}}">
   
<h1>{!!$blog->title!!}</h1>
<p>{!!$blog->body!!}</p>
@if($blog->created_at===$blog->updated_at)
<small><b>Created at {{$blog->created_at}}</b></small>

    
@else
<small><b>Updated at {{$blog->updated_at}}</b></small>
@endif
<a href="/blog/{{$blog->id}}/edit">Edit Post</a>
<form action="/blog/{{$blog->id}}" method="POST">
    @method('DELETE')
    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
<input type="submit" value="Delete">
</form>
@endsection