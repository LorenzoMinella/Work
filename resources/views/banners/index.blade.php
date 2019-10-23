@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Banners Editables
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
		    {!! Form::open(array('route' => 'banner.create','method'=>'POST')) !!}
		     {{ csrf_field() }}

		        	<div class="table-responsive">
		        		
		        		<table id="" class="table no-border">
		                    <tbody  id="">
		                    	<tr class="">
										<a class="btn btn-lg bg-blue" href="{{ route('banner.create')}}">Crear Nuevo Banner</a>				
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
							<th>Titulo Banner</th>
							<th>Banner</th>
							<th>Enlace</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($banners as $key => $banner)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $banner->title }}</td>
							<td><center><img src="{{URL::asset($banner->banner_url)}}" width="40%" height="10%"/></center></td>
							<td>{{ $banner->link_url }}</td>
							<td><center>
								<a class="btn btn-info" href="{{ route('banner.show',$banner->id) }}">Ver</a>
								<a class="btn btn-primary" href="{{ route('banner.edit',$banner->id) }}">Editar</a>
								{!! Form::open(['method' => 'DELETE','route' => ['banner.destroy', $banner->id],'style'=>'display:inline']) !!}
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
