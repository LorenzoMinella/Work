@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Preguntas Formulario Comparador
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop

@section('main-content')

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<h4><i class="icon fa fa-ban"></i> ¡Uy!, ha ocurrido un problema</h4>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif


	{!! Form::open(array('route' => 'forms_questions_answers.store','method'=>'POST')) !!}
    {{ csrf_field() }}


         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $question->title }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              	@foreach($answers as $answer)
                <div class="form-group">
                  <label for="content">{{ $answer->content }}</label>
                  	{!! Form::select("question_$answer->id", $questions,[], array('class' => 'form-control preguntas', 'id' => 'preguntas', 'placeholder' => 'Seleccionar Siguiente Pregunta', 'required' => 'required')) !!}
                </div>
                @endforeach
              </div>
              <input type="hidden" name="question_id" value="{{$question->id}}">
              <input type="hidden" name="form_id" value="{{$id}}">
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Crear Respuesta</button>
              </div>
            </form>
          </div>

	{!! Form::close() !!}
@endsection
