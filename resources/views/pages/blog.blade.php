@extends('layouts.boiler');


@section('content')
@if(count($blogs)>=1)
@foreach ($blogs as $blog)

   <div class="card">
        <div class="card-body">
        <h3 class="card-title"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h3>
        <small class="card-body">Written at {{$blog->created_at}}</small>
</div>
    </div>
@endforeach

@endif
<div class="d-flex justify-content-center">
    {!! $blog->links() !!}
</div>

@endsection