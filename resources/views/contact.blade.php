@extends('layouts.app')

@section('title')
Contact
@endsection

@section('content')
    <h1>Contact</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore
        eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.</p>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter name</label>
            <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" placeholder="Message" id="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection

@section('panel')
    @parent
    <p>Additional text for contact page</p>
@endsection
