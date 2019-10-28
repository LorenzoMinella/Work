@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Ver Compañia
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
										<a class="btn btn-lg bg-blue" href="{{ route('companies.index')}}">Regresar</a>				
								</tr>
		                    </tbody>
		                </table>	
					</div>

         <div class="box box-primary">
            <div class="box-header with-border">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-group">
                <strong>Nombre Compañia:</strong>
                {{ $company->name }}
            </div>
	        <div class="form-group">
	            <strong>Descripción Compañia:</strong>
	            <p align="justify">{{ $company->description }}</p>
	        </div>
            <div class="form-group">
                <strong>Logo Compañia:</strong>
	                <center><img src="{{URL::asset($company->link_image)}}" width="40%" height="10%"/></center>
            </div>
	        <div class="form-group">
	            <strong>Teléfono de la Compañia:</strong>
	            <p align="justify">{{ $company->phone }}</p>
	        </div>
	        <div class="form-group">
	            <strong>Página de la Compañia:</strong>
	            <p align="justify">{{ $company->url_web }}</p>
	        </div>
            </div>
          </div>
@endsection