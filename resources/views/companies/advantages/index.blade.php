@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Compañias
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
		    {!! Form::open(array('route' => 'companies.create','method'=>'POST')) !!}
		     {{ csrf_field() }}

		        	<div class="table-responsive">
		        		
		        		<table id="" class="table no-border">
		                    <tbody  id="">
		                    	<tr class="">
										<a class="btn btn-lg bg-blue" href="{{ route('companies.create')}}">Crear Nueva Compañia</a>				
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
							<th>Nombre Compañia</th>
							<th>Descripción Compañia</th>
							<th>Imagen Logo Compañia</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($companies as $key => $company)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $company->name }}</td>
							<td><p align="justify">{{ $company->description }}</p></td>
							<td><center><img src="{{URL::asset($company->link_image)}}" width="100%" height="100%"/></center></td>
							<td><center>
								<a class="btn btn-info" href="{{ route('companies.show',$company->id) }}">Ver</a>
								<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Editar</a>
								{!! Form::open(['method' => 'DELETE','route' => ['companies.destroy', $company->id],'style'=>'display:inline']) !!}
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
