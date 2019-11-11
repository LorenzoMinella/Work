@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Preguntas Formulario Corto
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
                    <a class="btn btn-primary btn-block" href="{{ route('forms.index')}}">Finalizar</a>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-md">
            <div class="box box-primary">
			{!! Form::open(array('route' => 'questions_short.store','method'=>'POST')) !!}
			    {{ csrf_field() }}


			         <div class="box box-primary">
			            <div class="box-header with-border">
			              <h3 class="box-title">Crear Pregunta</h3>
			            </div>
			            <!-- /.box-header -->
			            <!-- form start -->

			              <div class="box-body">
			                <div class="form-group">
			                  <label for="title">Titulo Pregunta:</label>
					            {!! Form::text('title', null, array('placeholder' => ' Titulo Pregunta','class' => 'form-control', 'required' => 'required')) !!}
			                </div>
				               <div class="form-group">
				                  <label for="answer_type">Tipo de Respuestas:</label>
				                    {!! Form::select('answer_type',['0' => 'Respuesta Obligatoria', '1' => 'Código Postal', '2' => 'E-mail', '3' => 'Número Teléfonico',], '', array('class' => 'form-control', 'id' => 'tipo', 'placeholder' => 'Seleccionar', 'required' => 'required')) !!}
				                </div>
			              </div>

			              <!-- /.box-body -->
			              <input type="hidden" name="form_id" value="{{ $id }}">
			              @if($bandera === 0)
				              <div class="box-footer">
				                <button type="submit" class="btn btn-primary">Crear Pregunta</button>
				              </div>
			              @endif
			          </div>

				{!! Form::close() !!}
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
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($questions as $question)
						<tr>
							<td>{{ $question->id }}</td>
							<td><center>{{ $question->title }}</center></td>
							<td><center>
							@if($question->answer_type_short === 0)
	                            {!!link_to_route('answers_short.index', $title = 'Respuestas',
	                            $parameters = ['id' => $question->id,
	                            			   'form_id' => $id],
	                            $attributes = ['class'=>'btn btn bg-orange']);!!}  
	                        @endif

	                            {!!link_to_route('questions_short.edit', $title = 'Editar',
	                            $parameters = ['id_question' => $question->id,
	                            			   'id_form' => $id],
	                            $attributes = ['class'=>'btn btn bg-primary']);!!}  

								{!! Form::open(['method' => 'DELETE','route' => ['questions_short.destroy', $question->id],'style'=>'display:inline']) !!}
		                        <input type="hidden" name="form_id" value="{{ $id }}">
					            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
					        	{!! Form::close() !!}
							</center></td>
						</tr>
						@endforeach 
                       
                    </tbody>
                </table>
            </div>
		  </div>
        </div>
    </div>
@endsection