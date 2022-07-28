@extends('layouts.boiler');

@section('content')
<div class="container-sm">
    <!-- Content here -->
  
<div class="container-fluid">
<h1>{!!$blog->title!!}</h1>
@if($blog->pics)
<img src=" /storage/{{$blog->pics}}" class="rounded float-start">
@else

<img src="{{asset('/views/Nolmage.jpg')}}">
@endif
<p>{!!$blog->body!!}</p>
@if($blog->created_at===$blog->updated_at)
<small><b>Created at {{$blog->created_at}}</b></small>

    
@else
<small><b>Updated at {{$blog->updated_at}}</b></small>
@endif
@auth
<a href="/blog/{{$blog->id}}/edit" class="btn btn-primary">Edit Post</a>
<form action="/blog/{{$blog->id}}" method="POST" class="btn btn-warning">
    @method('DELETE')
    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
<input type="submit" value="Delete">
</form>
@else
<div></div>
@endauth
</div>
</div>
@endsection