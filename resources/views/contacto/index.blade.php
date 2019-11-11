@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Formulario Contácto 
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
							<th>Teléfono</th>
							<th>Mensaje</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($contacts as $contact)
						<tr>
							<td>{{ $contact->name }}</td>
							<td>{{ $contact->lastname }}</td>
							<td>{{ $contact->phone }}</td>
							<td>{{ $contact->message }}</td>
							<td><center>
								{!! Form::open(['method' => 'DELETE','route' => ['contact.destroy', $contact->id],'style'=>'display:inline']) !!}
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
