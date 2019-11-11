@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Leads
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

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
							<th>Código Postal</th>
							<th>Teléfono</th>
							<th>Url Origen</th>
							<th>Dirección IP</th>
							<th>Pais</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($leads as $lead)
						<tr>
							<td>{{ $lead->zip_code }}</td>
							<td>{{ $lead->phone }}</td>
							<td>{{ $lead->origin }}</td>
							<td>{{ $lead->ip_address }}</td>
							<td>{{ $lead->country }}</td>
							<td><center>
								{!! Form::open(['method' => 'DELETE','route' => ['leads.destroy', $lead->id],'style'=>'display:inline']) !!}
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
