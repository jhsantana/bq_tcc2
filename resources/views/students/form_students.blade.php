<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">		
	<title>Cadastro de Estudantes</title>
</head>
<body>
	
	<div class="container" style="text-align: center"><h1>Cadastro de Estudantes</h1></div>

<div class="container" style="margin-top: 80px">
		<div class="row">
		{!!Form::open(array('url' => 'students', 'method' => 'post'))!!}


			{!!Form::label('enrollment','Matricula:')!!}  <a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>



	
			{{ Form::text('enrollment', '', array('class'=>'form-control', 'placeholder'=>'Matricula')) }}

			
			{!!Form::label('name','Nome:')!!}
			{{ Form::text('name', '', array('class'=>'form-control', 'placeholder'=>'Nome')) }}

			
			{!!Form::label('email','e-mail:')!!}
			{{ Form::email('email', '', array('class'=>'form-control', 'placeholder'=>'E-mail')) }}

			

			{!!Form::label('password','Password:')!!}

			{{ Form::password('password', '', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		   
		    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

		{!!Form::close()!!}
</body>
</html>