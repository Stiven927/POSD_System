@extends('layout')
@section('title', 'Home')
@section('content')
@auth
    <div class="container">
       <h1> Bentornato, {{ Auth::user()->name }}</h1>
    </div>
@else
<div align="center">
<h1>
    Benvenuto nel POSD System
</h1>
<h3>
    Supportiamo gli sviluppatori dei software nella conoscenza delle regole della privacy previste dal GDPR
</h3>
</div>

    @endauth

@endsection
