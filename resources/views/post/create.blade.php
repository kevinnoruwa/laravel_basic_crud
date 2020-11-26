@extends('layouts/main')

@section('title')

 create page
@endsection


@section('content')

<form action='/post' method="POST">
    @csrf
    <div class="form-group">
        
      <label for="">Title</label>
      <input name="title" type="text" class="form-control"  placeholder="Enter title">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">content</label>
      <textarea name="content" class="form-control"  id="" ></textarea>
    </div>
    <div class="form-group">
      <select class="form-control"  name="category_id">
        @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
            

 
@endsection

