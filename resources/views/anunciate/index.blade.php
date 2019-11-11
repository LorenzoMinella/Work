@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Formulario Anunciate 
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-3 col-md-offset-1">
			            <div class="box box-solid">
 
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
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Empresa</th>
							<th>Correo</th>
							<th>Teléfono</th>
							<th>Mensaje</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($advertises as $advertise)
						<tr>
							<td>{{ $advertise->name }}</td>
							<td>{{ $advertise->lastname }}</td>
							<td>{{ $advertise->company_name }}</td>
							<td>{{ $advertise->company_email }}</td>
							<td>{{ $advertise->phone }}</td>
							<td>{{ $advertise->message }}</td>
							<td><center>
								{!! Form::open(['method' => 'DELETE','route' => ['advertises.destroy', $advertise->id],'style'=>'display:inline']) !!}
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
