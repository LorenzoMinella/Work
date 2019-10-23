@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Ver Banner
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
										<a class="btn btn-lg bg-blue" href="{{ route('banners.index')}}">Regresar</a>				
								</tr>
		                    </tbody>
		                </table>	
					</div>

         <div class="box box-primary">
            <div class="box-header with-border">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-group">
                <strong>Título del Banner:</strong>
                {{ $banner->title }}
            </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Banner:</strong>
	                <center><img src="{{URL::asset($banner->banner_url)}}" width="40%" height="10%"/></center>
	            </div>
	        </div>
            <div class="form-group">
                <strong>Link Url:</strong>
                {{ $banner->link_url }}
            </div>

            </div>
          </div>
@endsection