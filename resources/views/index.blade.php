@extends('layout.app')
@section('title','inicio')
@section('content')

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
</div>

<div class="container">
  <!-- Fila con botones alineados a la derecha -->
  <div class="row mb-3">
    <div class="col text-end">
      <button type="button" class="btn btn-primary">Botón 1</button>
      <button type="button" class="btn btn-secondary">Botón 2</button>
      <button type="button" class="btn btn-success">Botón 3</button>
    </div>
  </div>

  <!-- Tus columnas -->
  <div class="row text-center">
    <div class="col">
      primera columna 
    </div>
    <div class="col">
      segunda colmna 
    </div>
    <div class="col">
      tercera columna
    </div>
  </div>
</div>


@endsection 