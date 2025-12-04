@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="text-center">
        <h1>Welcome to the Home Page!</h1>
        <p class="lead">This is my Laravel project's homepage.</p>
        <a href="{{ url('/about') }}" class="btn btn-primary">Learn More About Us</a>
    </div>
@endsection
