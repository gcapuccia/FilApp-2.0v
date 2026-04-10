
@extends('layouts.cliente.plantillacliente')
    @section('contenido')
  <!-- Formulario de registro -->
  <div id="full-background">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center">
          <img src="/assets/img/sinfondo.ico" alt="FillApp Logo" class="img-fluid" style="max-width: 200px;">
           <h2 class="text-black mt-3 align-items-center">¡Bienvenido!</h2>
          </div>
          
          <form action="TODO: agregar confirmacion" method="post">
             @csrf
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
              <!-- <label for="motivo" class="form-label">Motivo de su visita</label> -->
                <select class="form-select" aria-label="Default select example">
                    @foreach($motivos as $motivo)
                        <option value="{{ $motivo->id }}">{{ $motivo->motivo }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-custom w-100">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  
 


  