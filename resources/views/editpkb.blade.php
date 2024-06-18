@extends('layout')
@section('title', 'Lista CWE')
@section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<br>

<div align="center">


<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Modifica PKB</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('editpkbpost',$id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="pattern" class="form-label">Pattern</label>
                            <input type="text" name="pattern" class="form-control" id="pattern" value="{{ $data[0]->Pattern }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="strategia" class="form-label">Strategia</label>
                            <input type="text" name="strategia" class="form-control" id="strategia"   value="{{ $data[0]->Strategia }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="CWE" class="form-label">CWE</label>
                            <input type="text" name="CWE" class="form-control" id="CWE" value="{{ $data[0]->CWE }}" required>
                        </div>
                       
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Aggiungi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection