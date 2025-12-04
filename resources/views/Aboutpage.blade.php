@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="text-center">
        <h1>About Us</h1>
        <p class="lead">We are building an amazing Laravel application!</p>
        <a href="{{ url('/contact') }}" class="btn btn-success">Contact Us</a>
    </div>
@endsection
