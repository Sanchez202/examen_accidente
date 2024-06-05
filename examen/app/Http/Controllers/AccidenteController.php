<?php

namespace App\Http\Controllers;
use App\Models\accidente;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{
    //
    public function edit(accidente $accidente){//Encuentro el Curso
       
        return view('edit',compact('accidente'));
 
      }

     //Update
    public function update(Request $request, accidente $accidente){
           
        $accidente->hora = $request->hora;
        $accidente->codigo = $request->codigo;
        $accidente->fecha = $request->fecha;
        $accidente->lugar = $request->lugar;
        $accidente->save();
     
        return redirect()->route('accidente.index');
     
      }
     //Destroy
     public function destroy (accidente $accidente){
        $accidente->delete();
        return redirect()->route('accidente.index');
    }

    public function show(accidente $accidente){

        return view('show',compact('accidente'));


    }
   public function index(){

        $accidente = accidente::orderBy('id', 'desc')->get();
        return view('listar', compact('accidente'));
                            
    }
    public function create(){
        return view('create');
    }

    public function store(Request $request){
       
        $curso= new accidente();
        $curso->hora=$request->hora;
        $curso->codigo=$request->codigo;
        $curso->fecha=$request->fecha;
        $curso->lugar=$request->lugar;
     
        
         
         $curso->save();
         return $curso;
    }

    
}
