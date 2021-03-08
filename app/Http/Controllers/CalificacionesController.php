<?php

namespace App\Http\Controllers;

use App\Models\Calificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CalificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['calificaciones']=Calificaciones::paginate(5);
        return view('calificaciones.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('calificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'NombreAlumno'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Correo'=>'required|email',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'NombreCurso'=>'required|string|max:100',
            'NombreDocente'=>'required|string|max:100'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosCalificaciones=request()->except('_token');
        if($request->hasFile('Foto')){
            $datosCalificaciones['Foto']=$request->file('Foto')->store('uploads','public');
            Calificaciones::insert($datosCalificaciones);
        //return response()->json($datosProfesor);
        return redirect('calificaciones')->with('Mensaje','Calificacion agregado con exito');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Calificaciones $calificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $calificaciones=Calificaciones::findOrFail($id);
        return view('calificaciones.edit',compact('calificaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
$datosCalificaciones=request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $calificaciones=Calificaciones::findOrFail($id);
            Storage::delete('public/'.$calificaciones->foto);
            $datosCalificaciones['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Calificaciones::where('id','=',$id)->update($datosCalificaciones);

        //$profesor=Profesor::findOrFail($id);
        //return view('profesor.edit',compact('profesor'));
         return redirect('calificaciones')->with('Mensaje','Calificaciones modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $calificaciones=Calificaciones::findOrFail($id);
        if(Storage::delete('public/'.$calificaciones->foto)){
        Calificaciones::destroy($id);
        }
        //return redirect('profesor');
        return redirect('calificaciones')->with('Mensaje','Calificacion eliminado');
    }
}
