<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container p-2">
        <div class="row">
            <div class="col align-self-end w-100">
<a href="/blog/create" class="btn btn-primary">Create New Blog</a></div>
</div>
</div>
@if(count($blogs)>=1)
@foreach ($blogs as $blog)
<div class="container-sm">
    <div class="row">
     <div class="col align-self-start"> 
<div class="card">
<div class="card-body">
<h3 class="card-title"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h3>
<small class="card-body">Written at {{$blog->created_at}}</small>
</div> 
<div class="col align-self-end">
    <a href="/blog/{{$blog->id}}/edit" class="btn btn-prmary align-self-end">Edit Post</a>
    </div> 
</div>
</div>
</div>
</div>
@endforeach

@endif
</x-app-layout>
