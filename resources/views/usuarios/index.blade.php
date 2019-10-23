@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Usuarios
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
		    {!! Form::open(array('route' => 'users.create','method'=>'POST')) !!}
		     {{ csrf_field() }}

		        	<div class="table-responsive">
		        		
		        		<table id="" class="table no-border">
		                    <tbody  id="">
		                    	<tr class="">
										<a class="btn btn-lg bg-blue" href="{{ route('users.create')}}">Crear Nuevo Usuario</a>				
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
							<th>Email</th>
							<th>Rol</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($users as $key => $user)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->display_name }}</td>
							<td><center>
								<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Ver</a>
								<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
								{!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline']) !!}
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

