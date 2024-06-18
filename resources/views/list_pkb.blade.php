@extends('layout')
@section('title', 'Lista PKB')
@section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<br>
<h1 class="display-3" align="center">Lista PKB</h1>
<div align="center">
<div class=container>
<div class="mt-5">
    @if($errors->any())
      <div class="col-12">
        @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
        @endforeach
      </div>  
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
</div>
<input class="form-control" id="myInput" type="text" placeholder="Cerca.." style="width:40%;" >

</div>
<br>
<table class="table table-bordered table-striped" style="width:80%;" align="center">
    <tr>
        <td>
        <p>Pattern</p>
        </td>
        <td>
        <p>Strategia</p>
        </td>
        <td>
        <p>CWE</p>
        </td>
    </tr>
    <tbody id="myTable">
    @forelse ($items as $item)
    <tr>
        <td>
            {{$item->Pattern}}
        </td>
        <td>
            {{$item->Strategia}}
        </td>
        <td>
            {{$item->CWE}}
        </td>

    </tr>
    @empty
        <tr>
            <td>Non c'è nessuna PKB da mostrare</td>
        </tr>
    @endforelse
</table>













<script>
    const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    $('#modalSelectStateId').val(recipient);
    modalBodyInput.value = recipient
  })
}
    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



    </script>
    </div>
@endsection