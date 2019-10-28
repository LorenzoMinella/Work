@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Crear Post
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop

@section('main-content')

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<h4><i class="icon fa fa-ban"></i> ¡Uy!, ha ocurrido un problema</h4>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

		        	<div class="table-responsive">
		        		
		        		<table id="" class="table no-border">
		                    <tbody  id="">
		                    	<tr class="">
										<a class="btn btn-lg bg-blue" href="{{ route('posts.index')}}">Regresar</a>				
								</tr>
		                    </tbody>
		                </table>	
					</div>


	{!! Form::model($post, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['posts.update', $post->id]]) !!}
    {{ csrf_field() }}


         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Post</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Título del Post:</label>
		            {!! Form::text('title', $post->title, array('placeholder' => 'Título del Post: ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="post_file">Archivo Adjunto:</label>
					{!!Form::file('post_file', array('class' => 'form-control'))!!}
                </div>
                <div class="form-group">
                  <label for="url_img">Imagen Post:</label>
					{!!Form::file('url_img', array('class' => 'form-control'))!!}
                </div>
                <div class="form-group">
                  <label for="content">Contenido Post:</label>
		            {!! Form::textarea('content', $post->content, array('placeholder' => 'Contenido Post: ','class' => 'form-control')) !!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
              </div>
            </form>
          </div>

	{!! Form::close() !!}
@endsection
