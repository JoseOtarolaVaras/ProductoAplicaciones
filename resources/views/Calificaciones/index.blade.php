@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif
<a href="{{url('calificaciones/create')}}" class="btn btn-success">Agregar Calificaciones</a>
<br>
<br>
<table class="table table-light">
	<thead class="thead-light">
		<tr>
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
	</thead>
	<tbody>
		@foreach($calificaciones as $calificaciones)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td><img src="{{asset ('storage').'/'.$calificaciones->Foto}}" alt="" width="200"></td>
			<td>{{$calificaciones->NombreAlumno}}</td>
			<td>{{$calificaciones->ApellidoPaterno}}</td>
			<td>{{$calificaciones->ApellidoMaterno}}</td>
			<td>{{$calificaciones->Correo}}</td>
			<td>{{$calificaciones->NombreCurso}}</td>
			<td>{{$calificaciones->HorarioInicio}}</td>
			<td>{{$calificaciones->HorarioFin}}</td>
			<td>{{$calificaciones->NombreDocente}}</td>
			<td>{{$calificaciones->Nota1}}</td>
			<td>{{$calificaciones->Nota2}}</td>
			<td>{{$calificaciones->Nota3}}</td>
			<td>{{$calificaciones->Nota4}}</td>
			<td>{{$calificaciones->Promedio}}</td>
			<td>
			<a href="{{url('/calificaciones/'.$calificaciones->id.'/edit')}}">
				Editar
			</a>

			|

				<form method="post" action="{{url('/calificaciones/'.$calificaciones->id)}}">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button type="submit" onclick="return confirm('¿Estas seguro de borrar?');" >Borrar</button>
				</form>

			</td>
		</tr>
		@endforeach
		<a href="{{url('/')}}">Regresar</a>
	</tbody>
</table>