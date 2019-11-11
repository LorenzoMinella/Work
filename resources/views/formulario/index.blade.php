@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Formularios Comparador
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Acciones</h3>
                </div>
                <div class="box-body">
	                <center>
					<a class="btn btn-primary btn-block " href="{{ route('forms.create')}}">Crear Nuevo Formulario</a>		
					</center>
                </div>
            </div>
        </div>
    </div>


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
							<th>No</th>
							<th>Nombre Formulario</th>
							<th>Tipo Formulario</th>
							<th>Acción</th>
						</tr>
                    </thead>
                    <tbody>
						@foreach ($forms as $form)
						<tr>
							<td>{{ $form->id }}</td>
							<td><center>{{ $form->name }}</center></td>
							<td>
								<center>
									@if($form->long_short == 0)
										Corto
									@endif
									@if($form->long_short == 1)
										Largo
									@endif
								</center>
							</td>
							<td><center>

                                    @if($form->status == '0')
                                        {!!link_to_route('form.modificaEstado', $title = 'Activar',
                                        $parameters = ['id' => $form->id],
                                        $attributes = ['class'=>'btn btn-success','style'=>'display:inline']);!!}
                                    @endif
                                    @if($form->status == '1')
	                                    {!!link_to_route('form.modificaEstado', $title = 'Desactivar',
	                                    $parameters = ['id' => $form->id],
	                                    $attributes = ['class'=>'btn btn-danger','style'=>'display:inline']);!!}
                                    @endif




								<a class="btn btn-primary" href="{{ route('forms.edit',$form->id) }}">Editar</a>
								{!! Form::open(['method' => 'DELETE','route' => ['forms.destroy', $form->id],'style'=>'display:inline']) !!}
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
