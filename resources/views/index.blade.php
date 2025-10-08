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
      <button type="button" class="btn btn-primary">inicio</button>
      <button type="button" class="btn btn-secondary">tabla</button>
      <button type="button" class="btn btn-success">formulario</button>
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
<div class="container text-center mt-5">
  <!-- Caja blanca centrada -->
  <div class="card mx-auto shadow" style="max-width: 400px; background: white;">
    <div class="card-body">
      <h5 class="card-title mb-3"><img src="imagen1.jpg" alt=""></h5>
      <form>
        <input type="file" class="form-control mb-3" accept="image/*">
        <button type="submit" class="btn btn-primary w-100">Cargar</button>
      </form>
    </div>
  </div>
</div>

<div class="container mt-4">
  <div class="row text-center">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">sensores en linea</h5>
          <p class="card-text">3</p>
          <p class="card-text">demo</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">Pequeña información resumida.</p>
          <p class="card-text">HACE 2 MIN</p>
          <p class="card-text">SIMULADA PARA LA DEMO</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Ultima sincronizacion</h5>
          <p class="card-text">MYSQL.</p>
          <p class="card-text">conectado via MYSQL</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-4">
  <h3>Estamos aquí</h3>
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!..." 
    width="100%" height="300" style="border:0;" 
    allowfullscreen="" loading="lazy">
  </iframe>
</div>
<!-- Botón para abrir -->
<button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#miModal">
  Abrir modal
</button>
<div>
<img src="resources/img/imagen1.jpg" alt="">
</div>

<!-- Modal -->
<div class="modal fade" id="miModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Título del modal</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        esta es una imagen
        <img src="" alt="">
            <img src="resources/img/imagen1.jpg" alt="">
      </div>
    </div>
  </div>
</div>



@endsection 