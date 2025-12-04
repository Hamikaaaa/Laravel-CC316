@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="text-center">
        <h1>Contact Us</h1>
        <p class="lead">Have questions? Reach out to us!</p>
        <form class="mt-3 w-50 mx-auto">
            <input type="text" class="form-control mb-2" placeholder="Your Name">
            <input type="email" class="form-control mb-2" placeholder="Your Email">
            <textarea class="form-control mb-2" rows="4" placeholder="Your Message"></textarea>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endsection
