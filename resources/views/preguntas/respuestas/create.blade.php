@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Crear Respuesta
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

		        	<div class="table-responsive">
		        		
		        		<table id="" class="table no-border">
		                    <tbody  id="">
	                          <tr class="">
	                            {!!link_to_route('answers.index', $title = 'Regresar',
	                            $parameters = ['id' => $id],
	                            $attributes = ['class'=>'btn btn-lg bg-blue']);!!}  
	                          </tr>
		                    </tbody>
		                </table>	
					</div>


	{!! Form::open(array('route' => 'answers.store','method'=>'POST')) !!}
    {{ csrf_field() }}


         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Respuesta</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="content">Respuesta:</label>
		            {!! Form::text('content', null, array('placeholder' => 'Respuesta','class' => 'form-control')) !!}
                </div>
              </div>
              <!-- /.box-body -->
              <input type="hidden" name="question_id" value="{{ $id }}">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Crear Respuesta</button>
              </div>
            </form>
          </div>

	{!! Form::close() !!}
@endsection
