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
		@foreach ($subjects as $subject)
		<tr>
		<td>{{ $subject->name }}</td>
		@endforeach
		</tr>
		</table>
	</div>
</body>
</html>