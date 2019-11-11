@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Glosario
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">
		    {!! Form::open(array('route' => 'glosary.create','method'=>'POST')) !!}
		     {{ csrf_field() }}
			    <div class="row">
			        <div class="col-md-3 col-md-offset-1">
			            <div class="box box-solid">
			                <div class="box-header with-border">
			                    <h3 class="box-title">Acciones</h3>
			                </div>
			                <div class="box-body">
			                    <center>
									<a class="btn btn-lg bg-blue" href="{{ route('glosary.create')}}">Crear Palabra</a>	   
			                    </center>
			                </div>
			            </div>
			        </div>
			    </div>
		    {!! Form::close() !!}
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
							<th>Contenido</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($glosaries as $glosary)
						<tr>
							<td>{{ $glosary->name }}</td>
							<td>{{ $glosary->content }}</td>
							<td><center>
								<a class="btn btn-primary" href="{{ route('glosaries.edit',$glosary->id) }}">Editar</a>
								{!! Form::open(['method' => 'DELETE','route' => ['glosaries.destroy', $glosary->id],'style'=>'display:inline']) !!}
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
