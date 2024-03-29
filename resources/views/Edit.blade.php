@extends('layouts.app')

@section('content')
<div class="col-md-12 bg-white p-4">
  <h2 class="my-4">Add New Action</h2>
  <form action="{{route('actions.update',$action->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3 p-3">
      <select name="category_id" class="form-control">
        @include('lists.categories')
      </select>
    </div>

    <div class="form-group mb-3 p-3">
      <input type="text" class="form-control" name="title" placeholder="Title" value="{{$action->title}}">
    </div>
    <div class="form-group mb-3 p-3">
     <textarea class="form-control" name="body"  cols="30" rows="10" placeholder="Body">
      {{$action->body}}">
     </textarea>
    </div>
    <div class="form-group mb-3 p-3">
      
      <textarea class="form-control" name="tecnische"  cols="30" rows="10" placeholder="Tecnische Details">
        {{$action->tecnische}}">
      </textarea>
    </div>
    <div class="form-group mb-3 p-3">
      <input type="text" class="form-control" name="price" placeholder="Price" value="{{$action->price}}">
    </div>

    <div class="form-group mb-3 p-3">
      <label for="details">upload Image</label>
      <img name="image_path" class="form-control w-25 h-25" src="{{url('storage/images/'.$action->image_path)}}" alt="">
      <input type="file" name="image_path" class="form-control">
    </div>

    <button type="submit" class="btn  btn-danger">Create</button>
  </form>
</div>

@endsection
