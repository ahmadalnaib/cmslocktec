@extends('layouts.app')

@section('content')
<h1>{{$action->title}}</h1>
<img src="{{asset('storage/images/'.$action->image_path)}}" alt="">
@endsection
