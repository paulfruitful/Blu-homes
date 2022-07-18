@extends('layouts.boiler');
<style>
    body{
        display: flex;
        flex-direction: column;
    }
    .well{
       
        text-decoration: none;
       margin:5% 11% 0.2% 11%; 
       border: solid 3px rgba(0, 0, 0, 0.568);
       padding: 10px 0 10px 23px;
        
        
    }
    .well h1{
        font-size: 19px;
        font-family: sans-serif;
        font-weight: 300;
    }
</style>
@section('content')
@if(count($blog)>=1)
@foreach ($blog as $blog)
    <div class="card">
        <div class="card-body">
        <h3 class="card-title"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h3>
        <small class="card-body">Written at {{$blog->created_at}}</small>
</div>
    </div>
@endforeach

@endif

@endsection