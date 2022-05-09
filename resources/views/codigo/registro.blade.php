@extends('layouts.base')
@extends('welcome')
@section('contenido')

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-7 mt-5">

   @if(session('usuarioGuardado'))
  <div class="alert alert-primary ">
      {{session('usuarioGuardado')}}
  </div>
  @endif

<div class="card bg-warning"> <!-- cambiar color -->

    <div class="card-header text"> <h2>Registro de usuarios</h2>  <div class="<col-md-10>">
        <div class="card">

<form class="text bg-dark" method="POST" action="{{route ('guardar')}}"> <!-- cambiar color -->
 @csrf

  <div class="form-group mx-sm-3 mb-2">
    <label for="">Nombre</label>
      <input  type="text" 
              name="nombre" 
              class="form-control text" 
              placeholder="Ingresar nombre"
              autocomplete="off">
  </div>

  <div class="form-group mx-sm-3 mb-2">
      <label for="">Apellido</label>
      <input  type="text" 
              name="apellido" 
              class="form-control text" 
              placeholder="Ingresar apellido"
              autocomplete="off">
  </div>

  <div class="form-group mx-sm-3 mb-2">
      <label for="">Cedula</label>
      <input  type="text" 
              name="cedula"  
              class="form-control text"
              placeholder="Ingresar cedula"
              autocomplete="off">
  </div>

   <div class="form-group mx-sm-3 mb-2">
      <label for="">E-mail</label>
      <input  type="email" 
              name="correo" 
              class="form-control text" 
              placeholder="Ingresar e-mail"
              autocomplete="off">
  </div>

  <div class="col align-self-center text-center">
      <button type="submit" class="btn btn-primary" name="agendado">Guardar</button>
  </div>

</form>
   </div>
        </div>
    </div>
</div>

        </div>
        </div>
        </div>      

@endsection

