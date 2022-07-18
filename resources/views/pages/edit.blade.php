@extends('layouts.boiler');

@section('content')
<form action="/blog/{{$blog->id}}" method="post">
    <div class="mb-5"></div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >Title</label>
     <input type="text" name="title" id="title"placeholder="Title" class="form-control" value="{!!$blog->title!!}">
     </div>
     <div class="mb-3">
<label for="exampleFormControlInput1" class="form-label" >Body</label>

   <textarea name="body" id="body" class="form-control" value="{!!$blog->body!!}"></textarea>
     <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
     
</div><input type="submit" id="submit" value="Submit" class="btn btn-primary mb-3">
@method('PATCH')
     
</form>
@endsection