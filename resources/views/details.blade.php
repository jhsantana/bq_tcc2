<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">	

	<title>Detalhes</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<a class="navbar-brand" href="/teachers/index">Inicio</a>
	</nav>
		<div class="container">
			<table class="table">
				<tr>
					<tr><h2>Professor(a): {{$teacher->name}}</h2></tr>
					<td><h3>Matricula: {{$teacher->enrollment}}</h3></td>
					<td><h3>E-mail: {{$teacher->email}}</h3></td>
				</tr>
			</table>

				<table class="table">
					@foreach($teacher->subjects as $subjects)
					<tr>
						<td>Disciplina: {{$subjects->name}}</td>
						<td> Turma
							@foreach ($subjects->classrooms as $classrooms)
								<td>{{ $classrooms->name }}</td>
							@endforeach
						@endforeach
					</tr>
			</table>		
		</div>
</body>
</html>