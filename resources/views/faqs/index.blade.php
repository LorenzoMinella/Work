@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Faqs
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
		    {!! Form::open(array('route' => 'faqs.create','method'=>'POST')) !!}
		     {{ csrf_field() }}

		        	<div class="table-responsive">
		        		
		        		<table id="" class="table no-border">
		                    <tbody  id="">
		                    	<tr class="">
										<a class="btn btn-lg bg-blue" href="{{ route('faqs.create')}}">Crear Nueva Pregunta</a>				
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
							<th>Pregunta</th>
							<th>Contenido</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($faqs as $key => $faq)
						<tr>
							<td>{{ $faq->id }}</td>
							<td>{{ $faq->question }}</td>
							<td><p align="justify">{{ $faq->content }}</p></td>
							<td><center>
								<a class="btn btn-info" href="{{ route('faqs.show',$faq->id) }}">Ver</a>
								<a class="btn btn-primary" href="{{ route('faqs.edit',$faq->id) }}">Editar</a>
								{!! Form::open(['method' => 'DELETE','route' => ['faqs.destroy', $faq->id],'style'=>'display:inline']) !!}
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
