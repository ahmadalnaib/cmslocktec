@extends('admin.template')

@section('breadcrumb')
         Actions
@endsection

@section('content')

    <div class="container-fluid">
      <div class="card mb-3">
        @include('alerts.success')
        <div class="card-header">
          <i class="fa fa-table"></i> Actions
          </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>num</th>
                  <th>Title</th>
                  <th>Slug </th>
                  <th> Content</th>
                  <th>Writer  </th>
                  <th>Publised  </th>
                  <th>Categories  </th>
                </tr>
              </thead>
              <tbody>
              @foreach($actions as $action)
                <tr>
                  <td>{{$action->id}}</td>
                  <td>{{ $action->title }}</td>
                  <td>{{$action->slug}}</td>
                  <td>{{ str_limit($action->body,100)}}</td>
                  <td>{{$action->user->name}}</td>
                  <td><input type="checkbox" value="{{$action->approved}}" {{$action->approved ? 'checked' : ''}}></td>
                  <td>{{$action->category->title}}</td>
                  <td>
                    <a class="btn btn-primary" href="{{ route('action.edit',$action->id) }}">
                      <i class="fa fa-edit fa-2x"></i>                                
                    </a>
                  </td>
                  <td>
                    <form method="post" action="{{ route('action.destroy',$action->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-link"><i class="fa fa-trash fa-2x"></i> </button>       
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
 
@endsection

@section('script')

@endsection