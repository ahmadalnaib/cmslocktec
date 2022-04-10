@extends('admin.template')

@section('breadcrumb')
       Edit Action
@endsection

@section('content')
    <div class="container-fluid">
      <div class="card mb-3">
       @include('alerts.success')
        <div class="card-header">
          <i class="fa fa-table"></i>   Edit Action
        </div>
        <div class="card-body">
          <div class="container">
            <form method="POST" action="{{route('action.update',$action->id)}}" enctype="multipart/form-data">
                @csrf
                @method('Patch')
                <div class="form-row">
                    <div class="col-lg-5 form-group">
                        <label for="title">Title </label>
                        <input type="text" class="form-control" name="title"  value="{{$action->title}}">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="category_id">Categories </label>
                        <select class="form-control" name="category_id">
                            @include('lists.categories')
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-5 form-group">
                        <label for="slug">Slug  </label>
                        <input type="text" class="form-control" name="slug" placeholder="" value="{{$action->slug}}">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="approved">Approved  </label>
                        <input type="checkbox" class="" name="approved"  value="{{$post->approved}}" {{$post->approved ? 'checked' : ''}}>
                    </div>
                </div>

                <div class="col-lg-12 form-group">
                    <label for="image"> Image    </label>
                    <img name="img"  class="form-control w-25 h-25" src="{{$post->image_path}}">
                    <input type="file" name="image"  class="form-control">
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body"> body </label>
                    <textarea class="form-control col" name="body" rows="3"  >{{$action->body}}</textarea>
                </div>
                <div class="col-lg-12 form-group">
                  <label for="tecnische"> tecnische </label>
                  <textarea class="form-control col" name="tecnische" rows="3"  >{{$action->tecnische}}</textarea>
              </div>
              <div class="form-group mb-3 p-3">
                <input type="text" class="form-control" name="price" placeholder="Price" value="{{$action->price}}">
              </div>

                <div class="col-lg-12 form-group">
                    <button type="submit" class="btn btn-primary mt-3">Update </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('script')

@endsection