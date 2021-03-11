<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Calificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
=======
use App\Calificaciones;
use Illuminate\Http\Request;
use DB;

>>>>>>> 33e86e7 (first commit)
class CalificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //
        $datos['calificaciones']=Calificaciones::paginate(5);
        return view('calificaciones.index',$datos);
=======
        $calificaciones = DB::table('calificaciones')
            ->join('cursos', 'calificaciones.idCurso', '=', 'cursos.id')
            ->join('alumnos', 'calificaciones.idAlumno', '=', 'alumnos.id')
            ->select('calificaciones.*', 'cursos.NombreC','alumnos.Nombre')
            ->get();
        return view("calificaciones.index",compact('calificaciones'));
>>>>>>> 33e86e7 (first commit)
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
<<<<<<< HEAD
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
=======
  public function store(Request $request)
    {
        //
         $datosCalificaciones=request()->except('_token');
        Calificaciones::insert($datosCalificaciones);
        //return response()->json($datosProfesor);
        return redirect('calificaciones')->with('Mensaje','Calificacion agregado con exito');
>>>>>>> 33e86e7 (first commit)
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  \App\Models\Calificaciones  $calificaciones
=======
     * @param  \App\Calificaciones  $calificaciones
>>>>>>> 33e86e7 (first commit)
     * @return \Illuminate\Http\Response
     */
    public function show(Calificaciones $calificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  \App\Models\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
=======
     * @param  \App\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
>>>>>>> 33e86e7 (first commit)
    {
        //
        $calificaciones=Calificaciones::findOrFail($id);
        return view('calificaciones.edit',compact('calificaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @param  \App\Models\Calificaciones  $calificaciones
=======
     * @param  \App\Calificaciones  $calificaciones
>>>>>>> 33e86e7 (first commit)
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
<<<<<<< HEAD
$datosCalificaciones=request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $calificaciones=Calificaciones::findOrFail($id);
            Storage::delete('public/'.$calificaciones->foto);
            $datosCalificaciones['Foto']=$request->file('Foto')->store('uploads','public');
        }
=======
        $datosCalificaciones=request()->except(['_token','_method']);
>>>>>>> 33e86e7 (first commit)
        Calificaciones::where('id','=',$id)->update($datosCalificaciones);

        //$profesor=Profesor::findOrFail($id);
        //return view('profesor.edit',compact('profesor'));
<<<<<<< HEAD
         return redirect('calificaciones')->with('Mensaje','Calificaciones modificado con exito');
=======
         return redirect('calificaciones')->with('Mensaje','Calificacion modificado con exito');
>>>>>>> 33e86e7 (first commit)
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  \App\Models\Calificaciones  $calificaciones
=======
     * @param  \App\Calificaciones  $calificaciones
>>>>>>> 33e86e7 (first commit)
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
<<<<<<< HEAD
        $calificaciones=Calificaciones::findOrFail($id);
        if(Storage::delete('public/'.$calificaciones->foto)){
        Calificaciones::destroy($id);
        }
        //return redirect('profesor');
        return redirect('calificaciones')->with('Mensaje','Calificacion eliminado');
=======

        $calificaciones=Calificaciones::findOrFail($id);
        //return redirect('profesor');
        Calificaciones::destroy($id);
        return redirect('calificaciones')->with('Mensaje','Calificaciones eliminado');
>>>>>>> 33e86e7 (first commit)
    }
}
