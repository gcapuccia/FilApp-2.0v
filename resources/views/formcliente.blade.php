
@extends('layouts.cliente.plantillacliente')
    @section('contenido')
  <!-- Formulario de registro -->

  <!-- //TODO agregar logos y fotos -->
  <div id="full-background">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/sinfondo.png" alt="FillApp Logo" class="img-fluid" style="max-width: 200px;">
           <h2 class="text-black mt-3 ">¡Bienvenidos!</h2>
          </div>
          
          <form>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Juan ">
            </div>
            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="apellido" placeholder="Diaz">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="ejemplo@fillap.com">
            </div>
            <div class="mb-3">
              <label for="comentarios" class="form-label">Comentarios</label>
              <textarea class="form-control" id="comentarios" rows="2" placeholder=""></textarea>
            </div>
            <div class="mb-3">
              <label for="motivo" class="form-label">Motivo de registro</label>
              <select class="form-select" id="motivo">
                <option selected>Selecciona un motivo</option>
                <option value="1">Compra</option>
                <option value="2">Retirar Productos</option>
                <option value="3">Post Venta</option>
              </select>
            </div>
            <button type="submit" class="btn btn-custom w-100">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  
 


  