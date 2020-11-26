@extends('layouts/main')

@section('title')

 create page
@endsection


@section('content')

<form action='/post/{{$post->id}}' method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        
      <label for="">Title</label>
    <input name="title" type="text" class="form-control"  value="{{$post->title}}">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">content</label>
      <textarea name="content" class="form-control" name="" id="" >{{$post->content}}</textarea>
    </div>
    <div class="form-group">
      <select class="form-control" name="category_id" >
        @foreach($categories as $category)

          @if($category->id == $post->category_id)
            <option  selected value="{{$category->id}}">{{$category->name}}</option>
          @else
            <option  value="{{$category->id}}">{{$category->name}}</option>
          @endif

        @endforeach
      </select>  
    </div>
   
  
    <button type="submit" class="btn  btn-primary">Submit</button>
  </form>
 
  
  


 
@endsection



