@extends('layouts.app')

@section('title')
{{$data->theme}}
@endsection

@section('content')
<h1>{{$data->theme}}</h1>
<div class="alert alert-info">
    <p>{{$data->message}}</p>
    <p>{{$data->name}}</p>
    <p>{{$data->email}}</p>
    <a href="{{route('contact-data')}}"><button class="btn btn-warning">All comments</button></a>
</div>

@endsection
