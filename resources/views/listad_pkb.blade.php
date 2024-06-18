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
        <td>
        <p>Modifica</p>
        </td>
        <td>
        <p>Elimina</p>
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
        <td>
        <a href="{{url('editPKB/'.$item->id)}}" type="button" class="btn btn-outline-warning">✏️</button>
         </td>
         <td>
         <form action="{{ url('deletePKB/'.$item->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('POST')
    <button type="submit" class="btn btn-outline-danger">🗑️</button>
</form>

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