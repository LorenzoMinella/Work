@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Ver Roles
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
										<a class="btn btn-lg bg-blue" href="{{ route('roles.index')}}">Regresar</a>				
								</tr>
		                    </tbody>
		                </table>	
					</div>
	{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

         <div class="box box-primary">
            <div class="box-header with-border">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $role->display_name }}
            </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Descripción:</strong>
	                {{ $role->description }}
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Permisos Asociados:</strong>
	                @if(!empty($rolePermissions))
						@foreach($rolePermissions as $v)
							<label class="label label-success">{{ $v->display_name }}</label>
						@endforeach
					@endif
	            </div>
	        </div>
            </div>
          </div>

	{!! Form::close() !!}
@endsection