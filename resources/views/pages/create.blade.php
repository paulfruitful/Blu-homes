@extends('layouts.boiler');

@section('content')

<form action="/blog" method="post" enctype="multipart/form-data">
  @csrf
    <div class="mb-5"></div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
     <input type="text" name="title" id="title"placeholder="Title" class="form-control" value="{!!old('title')!!}">
     </div>
  <label for="exampleFormControlInput1" class="form-label">Body</label>
  
   <input name="body" type="text"id="body" class="form-control" value="{!!old('body')!!}">
     
     
</div>
     <div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Picture Header</label>
  <input type="file" name="picture" id="pic"placeholder="Choose Picture" class="form-control" value="{!!old('picture')!!}">
  </div>
<input type="submit" id="submit" value="Submit" class="btn btn-primary mb-3">
</form>
@endsection