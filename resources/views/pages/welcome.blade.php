<!-- welcome.blade.php -->
@extends('layouts.app')

@section('body')
    @guest
        <h1>Welcome</h1>
        <p>Please login or register to access the library.</p>
    @else
        <h1>Welcome, {{ Auth::user()->name }}</h1>
        <!-- Your authenticated user content goes here -->
    @endguest
@endsection