@extends('layouts.base')
@extends('welcome')
@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-7 mt-5">

@if(session('usuarioEliminado'))
            <div class="alert alert-success">
                {{session('usuarioEliminado')}}
            </div>
            @endif

<div class="card bg-warning"> <!-- cambiar color -->

    <div class="card-header text"> <h2>Listado de usuarios</h2>  <div class="<col-md-10>">
      
           <table class="table table bordered table strype text-center table table-dark ">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Cedula</th>
              <th>E-mail</th>
              <th>Modificar / Eliminar</th>
            </tr>
          </thead>
          
            <tbody>
              @foreach($users as $user)
               <tr>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellido}}</td>
                <td>{{$user->cedula}}</td>
                <td>{{$user->correo}}</td>

                <form action="{{route('delete', $user->id)}}" method="POST">
                <td>

                    <a href="{{ route ('modificar', $user->id) }}" class="btn btn-primary  ">
                            <i class="fas fa-pencil-alt "></i>
                        </a>
                         <button type="submit" onclick="return confirm('Eliminar')" class="btn btn-danger ">
                        <i class="fa fa-trash"></i>
                        </button>


                        @csrf @method('DELETE')
                 </form>
                </td>
               </tr>
               @endforeach
            </tbody>
        </table>

  
      </div>
    </div>
    
      </div>
    </div>
  </div>
</div>

@endsection

