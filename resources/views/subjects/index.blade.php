<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">	
	<title>Lista de disciplinas</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
			<a class="navbar-brand" href="/teachers/index">Inicio</a>
			<a class="navbar-brand" href="/teachers/create">Cadastro de professores</a>
			<a class="navbar-brand" href="/subjects/create">Cadastro de disciplinas</a>
			<a class="navbar-brand" href="/subjects/index">Lista de Disciplinas</a>
	</nav>
	<div class="container">
		<h1>Lista de disciplinas</h1>
		<table class="table">
		<td><h3> Turma </h3> </td>
		<td> <h3>Disciplina </h3></td>
		@foreach ($subjects as $subject)
		<tr>
				@foreach ($subject->classrooms as $classrooms)
					<td>{{ $classrooms->name }}</td>
				@endforeach
			<td>{{ $subject->name }}</td>
		</tr>
		@endforeach
		</table>
	</div>
</body>
</html>