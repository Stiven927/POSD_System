@extends('layout')
@section('title', 'Home')
@section('content')
@auth
    <div class="container">
       <h1> Bentornato, {{ Auth::user()->name }}</h1>
    </div>
    @endauth

@endsection
