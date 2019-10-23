@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Crear Banner
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
										<a class="btn btn-lg bg-blue" href="{{ route('banners.index')}}">Regresar</a>				
								</tr>
		                    </tbody>
		                </table>	
					</div>


	{!! Form::open(array('route' => 'banners.store','method'=>'POST', 'enctype' => 'multipart/form-data')) !!}
    {{ csrf_field() }}


         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Banner</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Título del Banner:</label>
		            {!! Form::text('title', null, array('placeholder' => 'Título del Banner: ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="banner_url">Subir Banner:</label>
					{!!Form::file('banner_url', array('class' => 'form-control'))!!}
                </div>
                <div class="form-group">
                  <label for="link_url">Link Url:</label>
		            {!! Form::text('link_url', null, array('placeholder' => 'Link: ','class' => 'form-control')) !!}
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
