@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Crear Compañia
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
										<a class="btn btn-lg bg-blue" href="{{ route('companies.index')}}">Regresar</a>				
								</tr>
		                    </tbody>
		                </table>	
					</div>


	{!! Form::open(array('route' => 'companies.store','method'=>'POST', 'enctype' => 'multipart/form-data')) !!}
    {{ csrf_field() }}


         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Compañia</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nombre de la Compañia:</label>
		            {!! Form::text('name', null, array('placeholder' => 'Nombre de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="description">Descripción de la Compañía:</label>
		            {!! Form::textarea('description', null, array('placeholder' => 'Descripción de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="link_image">Logo de la Compañia:</label>
					{!!Form::file('link_image', array('class' => 'form-control'))!!}
                </div>
                <div class="form-group">
                  <label for="phone">Teléfono de la Compañía:</label>
		            {!! Form::text('phone', null, array('placeholder' => 'Teléfono de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="url_web">Página de la Compañía:</label>
		            {!! Form::url('url_web', null, array('placeholder' => 'Página de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="nivel_seguridad">Nivel de Seguridad de la Compañía:</label>
		            {!! Form::textarea('nivel_seguridad', null, array('placeholder' => 'Nivel de Seguridad de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="tecnologia">Tecnología de la Compañía:</label>
		            {!! Form::textarea('tecnologia', null, array('placeholder' => 'Tecnología de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="diferencia">Diferencias de la Compañía:</label>
		            {!! Form::textarea('diferencia', null, array('placeholder' => 'Diferencias de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="precio">Precios de la Compañía:</label>
		            {!! Form::textarea('precio', null, array('placeholder' => 'Precios de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="contratar">Contratación de la Compañía:</label>
		            {!! Form::textarea('contratar', null, array('placeholder' => 'Contratación de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="instalacion">Instalación de la Compañía:</label>
		            {!! Form::textarea('instalacion', null, array('placeholder' => 'Instalación de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="direccion">Dirección de la Compañía:</label>
		            {!! Form::textarea('direccion', null, array('placeholder' => 'Dirección de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="permanencia">Permanencia de la Compañía:</label>
		            {!! Form::textarea('permanencia', null, array('placeholder' => 'Permanencia de la Compañia','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="baja">Darse de Baja de la Compañía:</label>
		            {!! Form::textarea('baja', null, array('placeholder' => 'Darse de Baja de la Compañía','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="facturacion">Facturación de la Compañía:</label>
		            {!! Form::textarea('facturacion', null, array('placeholder' => 'Facturación de la Compañía','class' => 'form-control')) !!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Crear Compañia</button>
              </div>
            </form>
          </div>

	{!! Form::close() !!}
@endsection
