<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">	
	<title>Cadastro de Turmas</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<a class="navbar-brand" href="/teachers/index">Inicio</a>
	</nav>
<div class="container">

	{!!Form::open(array('url' => 'classroom', 'method' => 'post'))!!}

		{!!Form::label('name','Nome:')!!}

		{{ Form::text('name', '', array('class'=>'form-control', 'placeholder'=>'Turma')) }}


	    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

	{!!Form::close()!!}

</div>
</body>
</html>