@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Preguntas Formulario Comparador
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-3 col-md-offset-1">
                	<br>
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Acciones</h3>
                </div>
                <div class="box-body">
                              {!!link_to_route('questions.index', $title = 'Regresar',
                              $parameters = ['id' => $id],
                              $attributes = ['class'=>'btn btn-warning btn-block']);!!}
                    <a class="btn btn-primary btn-block" href="{{ route('forms.index')}}">Finalizar</a>
                </div>
            </div>
        </div>
    </div>

 

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
	    	@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif
          <div class="box">
			<div class="box-body">
	            <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    	<tr class="header">
							<th>No</th>
							<th>Pregunta</th>
							<th>Respuestas</th>
							<th>Llevan a la Pregunta</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($questions as $question)
						<tr>
							<td>{{ $question->id }}</td>
							<td><center>{{ $question->title }}</center></td>
							<td><p align="justify">
		                        @foreach( (\App\Answer::where('question_id', '=',$question->id)->get()) as $answer)
		                        	<li>{{ $answer->content }}</li>
		                        @endforeach
							</p></td>
							<td><p align="justify">
		                        @foreach( (\App\Answer::where('question_id', '=',$question->id)->get()) as $answer)
		                        	<li>{{\App\Question::where('id', '=',$answer->next_question)->first()->title}}</li>
		                        @endforeach
							</p></td>
						</tr>
						@endforeach 
                       
                    </tbody>
                </table>
            </div>
		  </div>
        </div>
    </div>
@endsection
