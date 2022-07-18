@extends('layouts.boiler');

@section('content')
<style>
    form{
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%,-50%);
        display: flex;
        flex-direction: column;
        width: 100%;
        
        margin: 5% 0 0 0;
    }
    input[type=text]:focus {
  border: 3px solid rgb(14, 159, 255);
}
    #title{
        display: inline-block;
        width: 80%;
        height: 50px;
        margin-bottom: 80px;
        border:1.5px solid black;
       
    }
    #body{
        display:inline-block;
        width: 100%;
        height: 250px;
        border:1.5px solid black;
        margin-bottom: 10px;
        padding-left: -40px;
    }
    
</style>

<form action="/blog/{{$blog->id}}" method="post">
    <div class="mb-5"></div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" value="{!!$blog->title!!}">Title</label>
     <input type="text" name="title" id="title"placeholder="Title" class="form-control">
     </div>
     <div class="mb-3">
<label for="exampleFormControlInput1" class="form-label" value="{!!$blog->body!!}">Body</label>

   <textarea name="body" id="body" class="form-control"></textarea>
     <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
     
</div><input type="submit" id="submit" value="Submit" class="btn btn-primary mb-3">
@method('PATCH')
     
</form>
@endsection