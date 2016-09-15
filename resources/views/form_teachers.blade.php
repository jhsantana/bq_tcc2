<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">	
	<title>Cadastro de professores</title>
</head>
<body>
	<div class="container" style="margin-top: 80px">
		<div class="row">
		{!!Form::open(array('url' => 'teachers', 'method' => 'post'))!!}


			{!!Form::label('enrollment','Matricula:')!!}  <a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>



	
			{{ Form::text('enrollment', '', array('class'=>'form-control', 'placeholder'=>'Matricula')) }}

			
			{!!Form::label('name','Nome:')!!}

			{{ Form::text('name', '', array('class'=>'form-control', 'placeholder'=>'Nome')) }}

			
			{!!Form::label('subject','Disciplina:')!!}
			<select multiple class="form-control"  name ="subjects[]">
				  @foreach($subjects as $s)
				  <option value="{{$s->id}}"> {{$s->name}} </option>
				  @endforeach
			</select>
			
			{!!Form::label('email','e-mail:')!!}

			{{ Form::email('email', '', array('class'=>'form-control', 'placeholder'=>'E-mail')) }}

			

			{!!Form::label('password','Password:')!!}

			{{ Form::password('password', '', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

		{!!Form::close()!!}
		</div>
	</div>
</body>
</html>