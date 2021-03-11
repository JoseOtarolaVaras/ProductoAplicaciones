<<<<<<< HEAD

<div class="container">
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
=======
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>Crear Calificaciones</title>
</head>
<body>


>>>>>>> 33e86e7 (first commit)
<form action="{{url('/calificaciones')}}" method="post" enctype="multipart/form-data">
{{ csrf_field()}}
@include('calificaciones.forms',['Modo'=>'crear'])

<<<<<<< HEAD
</form>
=======
</form>
</body>
</html>
>>>>>>> 33e86e7 (first commit)
