<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">		
	<title>Lista de Alunos</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<a class="navbar-brand" href="/teachers/index">Inicio</a>
	</nav>
	<div style="text-align:center">
		<h1>Lista de Alunos</h1>

	<table class="table">
		@foreach($students as $student)
			<tr>
				<td>{{$student->enrollment}}</td>
				<td>{{$student->name}}</td>
				<td>{{$student->email}}</td>
				<td><a href="/students/{{$student->id}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></td>
		@endforeach
			</tr>
	</table>
	</div>
</body>
</html>