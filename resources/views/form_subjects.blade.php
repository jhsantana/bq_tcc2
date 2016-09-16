<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">	
	<title>Cadastro de Disciplinas</title>
</head>
<body>
<div class="container">
	
	{!!Form::open(array('url' => 'subjects', 'method' => 'post'))!!}

		{!!Form::label('name','Nome:')!!}

		{{ Form::text('name', '', array('class'=>'form-control', 'placeholder'=>'Digite o nome da disciplina')) }}


		{!!Form::label('classroom','Turma:')!!}
		<select multiple class="form-control"  name ="classrooms[]">
			  @foreach($classrooms as $c)
			  <option value="{{$c->id}}"> {{$c->name}} </option>
			  @endforeach
		</select>


	    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

	{!!Form::close()!!}

</div>
</body>
</html>