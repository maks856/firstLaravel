@extends('layouts.app')

@section('title')
Comments
@endsection

@section('content')
<h1>Comments</h1>
@foreach($data as $element)
    <div class="alert alert-info">
        <h4>{{$element->theme}}</h4>
        <p>{{$element->email}}</p>
        <a href="{{route('contact-data-one', $element->id)}}"><button class="btn btn-warning">Details</button></a>
    </div>

@endforeach
@endsection
