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
<form action="{{route('add')}}" method="post">
    <label >Title: <input type="text" name="title" id="title"placeholder="Title"></label>
     <label>Body: <input type="text" name="body" id="body"></label>
     <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
     <input type="submit" id="submit" value="Submit" style="width: 120px; align-self:baseline;">

</form>
@endsection