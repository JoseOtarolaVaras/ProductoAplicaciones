<div class="form-group">
<label for="NombreAlumno" class="control-label"> {{'NombreAlumno'}} </label>
	<input type="text" class="form-control{{ $errors->has('NombreAlumno')?'is-invalid':''}} " name="NombreAlumno" id="NombreAlumno"
	value="{{isset($calificaciones->NombreAlumno)?$calificaciones->NombreAlumno:old('NombreAlumno')}}">
{!! $errors->first('NombreAlumno','<div class="invalid-feedback">:message</div>')!!}
	</div>

<div class="form-group">
	<label for="ApellidoPaterno" class="control-label"> {{'Apellido Paterno'}} </label>
	<input type="text" class="form-control{{$errors->has('ApellidoPaterno')? 'is-invalid':''}} "name="ApellidoPaterno" id="ApellidoPaterno"
	value="{{isset($calificaciones->ApellidoPaterno)?$calificaciones->ApellidoPaterno:old('ApellidoPaterno')}}">
	{!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>')!!}
	</div>

<div class="form-group">
	<label for="ApellidoMaterno"> {{'Apellido Materno'}} </label>
	<input type="text" class="form-control{{$errors->has('ApellidoMaterno')? 'is-invalid':''}} " name="ApellidoMaterno" id="ApellidoMaterno"
	value="{{isset($calificaciones->ApellidoMaterno)?$calificaciones->ApellidoMaterno:old('ApellidoMaterno')}}">
	{!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
	<label for="Correo" class="control-label">  {{'Correo'}} </label>
	<input type="email" class="form-control{{$errors->has('Correo')? 'is-invalid':''}}"name="Correo" id="Correo"
	value="{{isset($calificaciones->Correo)?$calificaciones->Correo:''}}">
	{!! $errors->first('Correo','<div class="invalid-feedback">:message</div>')!!}
</div>
<div class="form-group">
	<label for="Foto"> {{'Foto'}} </label>

	@if(isset($calificaciones->foto))
	<br>
	<img src="{{asset ('storage').'/'.$calificaciones->foto}}" alt="" width="200">
	@endif

	<input class="form-control {{$errors->has('Foto')?'is-invalid':''}}"type="file" name="Foto" id="Foto" value="">
{!! $errors->first('Foto','<div class="invalid-feedback">:message</div>')!!}
</div>
<div class="form-group">
<label for="NombreCurso" class="control-label"> {{'NombreCurso'}} </label>
	<input type="text" class="form-control{{ $errors->has('NombreCurso')?'is-invalid':''}} " name="NombreCurso" id="NombreCurso"
	value="{{isset($calificaciones->NombreCurso)?$calificaciones->NombreCurso:old('NombreCurso')}}">
{!! $errors->first('NombreCurso','<div class="invalid-feedback">:message</div>')!!}
	</div>
	<div class="form-group">
	<label for="HorarioInicio"> {{'HorarioInicio'}} </label>
	<input type="time" name="HorarioInicio" id="HorarioInicio"
	value="{{isset($calificaciones->HorarioInicio)?$calificaciones->HorarioInicio:''}}" required="">
	</div>
	</div>
	<div class="form-group">
	<label for="HorarioFin"> {{'HorarioFin'}} </label>
	<input type="time" name="HorarioFin" id="HorarioFin"
	value="{{isset($calificaciones->HorarioFin)?$calificaciones->HorarioFin:''}}" required="">
	</div>
	<div class="form-group">
<label for="NombreDocente" class="control-label"> {{'NombreDocente'}} </label>
	<input type="text" class="form-control{{ $errors->has('NombreDocente')?'is-invalid':''}} " name="NombreDocente" id="NombreDocente"
	value="{{isset($calificaciones->NombreDocente)?$calificaciones->NombreDocente:old('NombreDocente')}}">
{!! $errors->first('NombreDocente','<div class="invalid-feedback">:message</div>')!!}
	</div>
	<label for="Nota1"> {{'Nota1'}} </label>
	<input type="number" name="Nota1" id="Nota1" min="1" max="20"
	value="{{isset($calificaciones->Nota1)?$calificaciones->Nota1:''}}" required="">
	<br>

	<label for="Nota2"> {{'Nota2'}} </label>
	<input type="number" name="Nota2" id="Nota2" min="1" max="20"
	value="{{isset($calificaciones->Nota2)?$calificaciones->Nota2:''}}" required="">
	<br>
	<label for="Nota3"> {{'Nota3'}} </label>
	<input type="number" name="Nota3" id="Nota3" min="1" max="20"
	value="{{isset($calificaciones->Nota3)?$calificaciones->Nota3:''}}"required="">
	<br>
	<label for="Nota4"> {{'Nota4'}} </label>
	<input type="number" name="Nota4" id="Nota4" min="1" max="20"
	value="{{isset($calificaciones->Nota4)?$calificaciones->Nota4:''}}"required="">
	<br>


	<input type="submit" value="{{$Modo=='crear'? 'Agregar':'Modificar'}}">
	<a href="{{url('calificaciones')}}">Regresar</a>