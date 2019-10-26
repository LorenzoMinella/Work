@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Crear Permiso
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
										<a class="btn btn-lg bg-blue" href="{{ route('permissions.index')}}">Regresar</a>				
								</tr>
		                    </tbody>
		                </table>	
					</div>


	{!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
    {{ csrf_field() }}


         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Permiso</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nombre del Permiso:</label>
		            {!! Form::text('name', null, array('placeholder' => 'Nombre: ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="display_name">Nombre para mostrar:</label>
		            {!! Form::text('display_name', null, array('placeholder' => 'Nombre: ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="description">Descripción del Permiso:</label>
		            {!! Form::text('description', null, array('placeholder' => 'Descripción: ','class' => 'form-control')) !!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Crear</button>
              </div>
            </form>
          </div>

	{!! Form::close() !!}
@endsection
