@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Permisos
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
		    {!! Form::open(array('route' => 'permissions.create','method'=>'POST')) !!}
		     {{ csrf_field() }}

		        	<div class="table-responsive">
		        		
		        		<table id="" class="table no-border">
		                    <tbody  id="">
		                    	<tr class="">
										<a class="btn btn-lg bg-blue" href="{{ route('permissions.create')}}">Crear Nuevo Permiso</a>				
								</tr>
		                    </tbody>
		                </table>	
					</div>
		    {!! Form::close() !!}
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
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($permissions as $key => $permission)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $permission->name }}</td>
							<td>{{ $permission->description }}</td>
							<td><center>
								<a class="btn btn-info" href="{{ route('permission.show',$permission->id) }}">Ver</a>
								<a class="btn btn-primary" href="{{ route('permission.edit',$permission->id) }}">Editar</a>
								{!! Form::open(['method' => 'DELETE','route' => ['permission.destroy', $permission->id],'style'=>'display:inline']) !!}
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
