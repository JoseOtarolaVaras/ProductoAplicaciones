<<<<<<< HEAD
=======
@extends('plantilla')
@section('title')
CALIFICACIONES
 @endsection
 @section('fin')
<!DOCTYPE html>
<html>
<head>
	<link href="{{asset("css/estilo.css")}}" rel="stylesheet" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>Calificaciones</title>
</head>
<body>
<?php
 function calcularPromedio($n1,$n2,$n3,$n4){
      return  ($n1+$n2+$n3+$n4)/4;
    }
    function estado($n1,$n2,$n3,$n4){
    	$promedio= ($n1+$n2+$n3+$n4)/4;
    	if($promedio>=14){
    		return 'aprobado';
    	}else{
    		return 'desaprobado';
    	}
    }
?>
>>>>>>> 33e86e7 (first commit)
@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif
<<<<<<< HEAD
<a href="{{url('calificaciones/create')}}" class="btn btn-success">Agregar Calificaciones</a>
=======
<a href="{{url('calificaciones/crear')}}" class="btn btn-info">Agregar Calificaciones</a>
<a href="{{url('/')}}" class="btn btn-secondary">Regresar</a>
>>>>>>> 33e86e7 (first commit)
<br>
<br>
<table class="table table-light">
	<thead class="thead-light">
		<tr>
<<<<<<< HEAD
			<th>#</th>
			<th>Foto</th>
			<th>NombreAlumno</th>
			<th>ApellidoPaterno</th>
			<th>ApellidoMaterno</th>
			<th>Correo</th>
			<th>NombreCurso</th>
			<th>HorarioInicio</th>
			<th>HorarioFin</th>
			<th>NombreDocente</th>
			<th>Nota1</th>
			<th>Nota2</th>
			<th>Nota3</th>
			<th>Nota4</th>
			<th>Promedio</th>
			<th>Acciones</th>
=======
			<th scope="col">#</th>
			<th scope="col">Nombre del Curso</th>
			<th scope="col">Alumno</th>
			<th scope="col">Nota1</th>
			<th scope="col">Nota2</th>
			<th scope="col">Nota3</th>
			<th scope="col">Nota4</th>
			<th scope="col">Promedio</th>
			<th scope="col">Estado</th>
			<th scope="col">Acciones</th>
>>>>>>> 33e86e7 (first commit)
	</thead>
	<tbody>
		@foreach($calificaciones as $calificaciones)
		<tr>
			<td>{{$loop->iteration}}</td>
<<<<<<< HEAD
			<td><img src="{{asset ('storage').'/'.$calificaciones->Foto}}" alt="" width="200"></td>
			<td>{{$calificaciones->NombreAlumno}}</td>
			<td>{{$calificaciones->ApellidoPaterno}}</td>
			<td>{{$calificaciones->ApellidoMaterno}}</td>
			<td>{{$calificaciones->Correo}}</td>
			<td>{{$calificaciones->NombreCurso}}</td>
			<td>{{$calificaciones->HorarioInicio}}</td>
			<td>{{$calificaciones->HorarioFin}}</td>
			<td>{{$calificaciones->NombreDocente}}</td>
=======
			<td>{{$calificaciones->NombreC}}</td>
			<td>{{$calificaciones->Nombre}}</td>
>>>>>>> 33e86e7 (first commit)
			<td>{{$calificaciones->Nota1}}</td>
			<td>{{$calificaciones->Nota2}}</td>
			<td>{{$calificaciones->Nota3}}</td>
			<td>{{$calificaciones->Nota4}}</td>
<<<<<<< HEAD
			<td>{{$calificaciones->Promedio}}</td>
			<td>
			<a href="{{url('/calificaciones/'.$calificaciones->id.'/edit')}}">
				Editar
			</a>

			|
=======
			<td>{{calcularPromedio($calificaciones->Nota1,$calificaciones->Nota2,$calificaciones->Nota3,$calificaciones->Nota4)}}</td>
			<td>
				{{estado($calificaciones->Nota1,$calificaciones->Nota2,$calificaciones->Nota3,$calificaciones->Nota4)}}</td>
			<td>

			<a href="{{url('/calificaciones/'.$calificaciones->id.'/editar')}}" class="btn btn-success">
				Editar
			</a><br>

>>>>>>> 33e86e7 (first commit)

				<form method="post" action="{{url('/calificaciones/'.$calificaciones->id)}}">
				{{csrf_field()}}
				{{method_field('DELETE')}}
<<<<<<< HEAD
				<button type="submit" onclick="return confirm('¿Estas seguro de borrar?');" >Borrar</button>
=======
				<button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro de borrar?');"  class="btn btn-danger">Borrar</button>
>>>>>>> 33e86e7 (first commit)
				</form>

			</td>
		</tr>
		@endforeach
<<<<<<< HEAD
		<a href="{{url('/')}}">Regresar</a>
	</tbody>
</table>
=======
	</tbody>
</table>
</body>
</html>
 @endsection
>>>>>>> 33e86e7 (first commit)
