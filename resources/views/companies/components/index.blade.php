@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Ventajas y Desventajas de la Compañia
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
		        	<div class="table-responsive">
		        		
		        		<table id="" class="table no-border">
		                    <tbody  id="">
		                    	<tr class="">

				                          {!!link_to_route('advantages.create', $title = 'Crear Ventaja o Desventaja',
				                          $parameters = ['id' => $id_company],
				                          $attributes = ['class'=>'btn btn-lg bg-blue']);!!}	
								</tr>
		                    </tbody>
		                </table>	
					</div>
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
							<th>Contenido</th>
							<th>Ventaja/Desventaja</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($advantages as $key => $advantage)
						<tr>
							<td>{{ $id_company }}</td>
							<td>{{ $advantage->content }}</td>
							<td>
								@if($advantage->advatage_disadvantage == 0)
								<p align="justify">	
									Ventaja
								</p>
								@endif
								@if($advantage->advatage_disadvantage == 1)
								<p align="justify">	
									Desventaja
								</p>
								@endif
							</td>
							<td><center>
								<a class="btn btn-primary" href="{{ route('advantages.edit',$advantage->id) }}">Editar</a>
								{!! Form::open(['method' => 'DELETE','route' => ['advantages.destroy', $advantage->id],'style'=>'display:inline']) !!}
			                    <input type="hidden" name="company_id" value="{{$id_company}}">
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
