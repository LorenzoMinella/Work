@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Posts
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
		    {!! Form::open(array('route' => 'posts.create','method'=>'POST')) !!}
		     {{ csrf_field() }}

		        	<div class="table-responsive">
		        		
		        		<table id="" class="table no-border">
		                    <tbody  id="">
		                    	<tr class="">
										<a class="btn btn-lg bg-blue" href="{{ route('posts.create')}}">Crear Nuevo Post</a>				
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
							<th>Titulo Post</th>
							<th>Imagen Post</th>
							<th>Archivo Cargado</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($posts as $key => $post)
						<tr>
							<td>{{ $post->id }}</td>
							<td>{{ $post->title }}</td>
							<td><center><img src="{{URL::asset($post->url_img)}}" width="40%" height="10%"/></center></td>
							<td>
								@if($post->post_file == '')
									No posee Archivo Asociado.
								@else
									<font color=blue><a style="color:#0000ff" href="{{URL::to($post->post_file)}}" target="_blank">{{$post->title}}</a></font>
								@endif
							</td>
							<td><center>
								<a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Editar</a>
								{!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}
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
