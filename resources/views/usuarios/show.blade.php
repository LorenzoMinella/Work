@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Ver Usuario
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
										<a class="btn btn-lg bg-blue" href="{{ route('users.index')}}">Regresar</a>				
								</tr>
		                    </tbody>
		                </table>	
					</div>

         <div class="box box-primary">
            <div class="box-header with-border">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $users->name }}
            </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Email:</strong>
	                {{ $users->email }}
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Rol Asignado:</strong>
	                {{ $users->display_name }}
	            </div>
	        </div>
            </div>
          </div>
@endsection