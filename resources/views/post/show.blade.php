@extends('layouts/main')

@section('title')

    home page
@endsection


@section('content')

<h1>{{$post->title}}</h1> 

<p>{{$post->content}}</p>
<a class="btn btn-sm btn-warning" href="/post/{{$post->id}}/edit">edit</a>


<form action="/post/{{$post->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <button class="btn btn-sm btn-danger">delete</button>
</form>
  
@endsection

