@extends('layouts/main')

@section('title')

    home page
@endsection

@section('sidebar')
   
    
@endsection
@section('content')

    @foreach($post as $post)
        <a href="/post/{{$post->id}}">
            <h1>{{$post->title}}</h1> 
        </a>
        <p>{{$post->content}}</p>
        <hr>
    @endforeach
@endsection

