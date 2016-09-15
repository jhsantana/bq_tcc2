<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">	
	<title>Lista de Professores</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
			<a class="navbar-brand" href="/teachers/index">Inicio</a>
			<a class="navbar-brand" href="/teachers/create">Cadastro de professores</a>
			<a class="navbar-brand" href="/subjects/create">Cadastro de disciplinas</a>
			<a class="navbar-brand" href="/subjects/index">Lista de Disciplinas</a>
	</nav>
	<div class="container">
		<table class="table">
			@foreach($teachers as $teacher)
				<tr>
					<td>{{$teacher->enrollment}}</td>
					<td>{{$teacher->name}}</td>
					<td>{{$teacher->email}}</td>
					<td><a href="/teachers/{{$teacher->id}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></td>
				</tr>
			@endforeach
		</table>	
	</div>
</body>
</html>