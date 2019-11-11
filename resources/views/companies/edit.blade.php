@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Editar Compañia
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
								&nbsp;
		                    	<tr class="">
                            {!!link_to_route('advantages.index', $title = 'Ventajas y Desventajas',
                            $parameters = ['id' => $company->id],
                            $attributes = ['class'=>'btn btn-lg bg-blue']);!!}	
								          </tr>
		                    </tbody>
		                </table>	
					</div>


	{!! Form::model($company, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['companies.update', $company->id]]) !!}
    {{ csrf_field() }}


         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Compañia</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nombre de la Compañia:</label>
		            {!! Form::text('name', $company->name, array('placeholder' => 'Nombre de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="description">Descripción de la Compañía:</label>
		            {!! Form::textarea('description', $company->description, array('placeholder' => 'Descripción de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="link_image">Logo de la Compañia:</label>
					{!!Form::file('link_image', array('class' => 'form-control'))!!}
                </div>
                <div class="form-group">
                  <label for="phone">Teléfono de la Compañía:</label>
		            {!! Form::text('phone', $company->phone, array('placeholder' => 'Teléfono de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="url_web">Página de la Compañía:</label>
		            {!! Form::url('url_web', $company->url_web, array('placeholder' => 'Página de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="nivel_seguridad">Nivel de Seguridad de la Compañía:</label>
		            {!! Form::textarea('nivel_seguridad', $company->nivel_seguridad, array('placeholder' => 'Nivel de Seguridad de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="tecnologia">Tecnología de la Compañía:</label>
		            {!! Form::textarea('tecnologia', $company->tecnologia, array('placeholder' => 'Tecnología de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="diferencia">Diferencias de la Compañía:</label>
		            {!! Form::textarea('diferencia', $company->diferencia, array('placeholder' => 'Diferencias de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="precio">Precios de la Compañía:</label>
		            {!! Form::textarea('precio', $company->precio, array('placeholder' => 'Precios de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="contratar">Contratación de la Compañía:</label>
		            {!! Form::textarea('contratar', $company->contratar, array('placeholder' => 'Contratación de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="instalacion">Instalación de la Compañía:</label>
		            {!! Form::textarea('instalacion', $company->instalacion, array('placeholder' => 'Instalación de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="direccion">Dirección de la Compañía:</label>
		            {!! Form::textarea('direccion', $company->direccion, array('placeholder' => 'Dirección de la Compañia ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="permanencia">Permanencia de la Compañía:</label>
		            {!! Form::textarea('permanencia', $company->permanencia, array('placeholder' => 'Permanencia de la Compañia','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="baja">Darse de Baja de la Compañía:</label>
		            {!! Form::textarea('baja', $company->baja, array('placeholder' => 'Darse de Baja de la Compañía','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="facturacion">Facturación de la Compañía:</label>
		            {!! Form::textarea('facturacion', $company->facturacion, array('placeholder' => 'Facturación de la Compañía','class' => 'form-control')) !!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar Compañia</button>
              </div>
            </form>
          </div>

	{!! Form::close() !!}
@endsection
