@extends('layouts.base')
@extends('welcome')
@section('contenido')

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-7 mt-5">
      <div class="<col-md-10>">

<!--/*post es el metodo para enviar datos*/-->

@if(session('usuarioModificado'))
            <div class="alert alert-success">
                {{ session('usuarioModificado') }}
            </div>
            @endif

        <div class="card">
   <div class="card-header text bg-dark"> <h2>Modificar dato de usuario</h2>  <div class="<col-md-10>">

<form class="text" method="POST" action="{{route('editar', $usuario->id)}}">
  <!--patch es el metodo para modificar-->
 @csrf @method('PATCH')
  <div class="form-group mx-sm-3 mb-2">

    <label for="">Nombre</label>
    <input type="text"
      name="nombre"
      class="form-control text" 
      value="{{$usuario->nombre}}"
      placeholder="Ingresar nombre"
      autocomplete="off">
  </div>

  <div class="form-group mx-sm-3 mb-2">

    <label  for="">Apellido</label>
    <input type="text"
     name="apellido" 
     class="form-control text" 
     value="{{$usuario->apellido}}"
     placeholder="Ingresar apellido"
     autocomplete="off">
  </div>

  <div class="form-group mx-sm-3 mb-2">

    <label for="">Cedula</label>
    <input  type="text-center"
     name="cedula" 
     class="form-control text" 
     value="{{$usuario->cedula}}"
     placeholder="Ingresar cedula"
     autocomplete="off">
    </div>

  <div class="form-group mx-sm-3 mb-2">

    <label for="">E-mail</label>
    <input type="email" 
    name="correo" 
    class="form-control text"  
    value="{{$usuario->correo}}"
    placeholder="Ingresar e-mail"
    autocomplete="off">
  </div>

      <div class="col align-self-center text-center"> 

          <button  type="submit" class="btn btn-primary">Modificar</button>
          <button  type="submit" class="btn btn-primary" href="{{asset('codigo.listar')}}">Regresar</button>

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