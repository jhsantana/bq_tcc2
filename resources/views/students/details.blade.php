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





	
	<div style="text-align:center">
		<h1>Detalhe do aluno  - {{$student->name}}</h1>	
	</div>

	<table class="table">
		<tr>
			<td><h3>Matricula: {{ $student->enrollment}}</h3></td>
			<td><h3>{{ $student->email}}</h3></td>
			</tr>
		</table>
		

		<table class="table">
		@foreach($student->subjects as $subjects)
		<tr>
			<td>Disciplina:{{$subjects->name}}</td>
			<td> Turma
				@foreach ($subjects->classrooms as $classrooms)
					<td>{{ $classrooms->name }}</td>

				@endforeach
			@endforeach
			</td>
	</table>
</body>
</html>