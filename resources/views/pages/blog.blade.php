@extends('layouts.boiler');


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
<div class="m-6">
    @php
        use App\Models\blog;
        blog::links();
    @endphp
</div>

@endsection