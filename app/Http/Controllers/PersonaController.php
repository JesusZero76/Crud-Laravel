<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personas;

class PersonaController extends Controller
{
    public function ingreso(){
    return view('codigo.registro');
    }

    public function list(){
      $data['users']=personas::paginate(5);
      return view('codigo.listar',$data);
    }

     public function guardar(Request $request){
     $persona=new personas();
     $persona->nombre= $request->nombre;
     $persona->apellido= $request->apellido;
     $persona->cedula= $request->cedula;
     $persona->correo= $request->correo;
     $persona->save();
     return back()->with('usuarioGuardado','Usuario Guardado');
    }

    public function modificar($id){
     $usuario= personas::findOrFail($id);
     return view('codigo.modificar',compact('usuario'));
    }

    public function editar(Request $request,$id){
    $datospersona= request()->except((['_token', '_method']));
    personas::where('id','=',$id)->update($datospersona);
    return redirect('/listar')->with('usuarioModificado','Usuario Modificado');

   }
   public function delete($id){
    personas::destroy($id);
    return back()->with('usuarioEliminado','Usuario Eliminado');
  }



  
  public function impresion(){
    $data['users']=personas::paginate(5);
    return view('codigo.impresion',$data);
  }
}
