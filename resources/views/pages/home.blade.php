@extends('adminlte::layouts.app')

@section('htmlheader_title')
	HomePage
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
										        <a class="btn btn-lg bg-blue" href="{{ url('/home') }}">Regresar</a>				
								          </tr>
		                    </tbody>
		            </table>	
					   </div>


	{!! Form::open(array('route' => 'homepage.home_store','method'=>'POST')) !!}
    {{ csrf_field() }}


         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Home Page</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="description_home">Guía gratuita de compras de alarmas (Descripción):</label>
		            {!! Form::textarea('description_home', $homepages->description_home, array('placeholder' => 'Guía gratuita de compras de alarmas ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="select_alarm">¿Cómo seleccionar una alarma? (Descripción)</label>
		            {!! Form::textarea('select_alarm', $homepages->select_alarm, array('placeholder' => '¿Cómo seleccionar una alarma? ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label>Aspectos Seleccionar Alarma:</label>
		            {!! Form::text('desc_one', $homepages->desc_one, array('placeholder' => '1: ','class' => 'form-control')) !!}
                <br>
                {!! Form::text('desc_two', $homepages->desc_two, array('placeholder' => '2: ','class' => 'form-control')) !!}
                <br>
                {!! Form::text('desc_three', $homepages->desc_three, array('placeholder' => '3: ','class' => 'form-control')) !!}
                <br>
                </div>
                <div class="form-group">
                  <label for="description_middle">¿Por qué utilizar ALARMALIA? (Descripción)</label>
                {!! Form::textarea('description_middle', $homepages->description_middle, array('placeholder' => '¿Por qué utilizar ALARMALIA? ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="card_one">CONOCIMIENTO DEL MERCADO (Descripción)</label>
                {!! Form::textarea('card_one', $homepages->card_one, array('placeholder' => 'CONOCIMIENTO DEL MERCADO','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="card_two">AHORRO (Descripción)</label>
                {!! Form::textarea('card_two', $homepages->card_two, array('placeholder' => 'AHORRO','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="card_three">SERVICIO GRATUITO (Descripción)</label>
                {!! Form::textarea('card_three', $homepages->card_three, array('placeholder' => 'SERVICIO GRATUITO','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="card_four">RAPIDEZ (Descripción)</label>
                {!! Form::textarea('card_four', $homepages->card_four, array('placeholder' => 'RAPIDEZ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="card_five">RESULTADOS PERSONALIZADOS (Descripción)</label>
                {!! Form::textarea('card_five', $homepages->card_five, array('placeholder' => 'RESULTADOS PERSONALIZADOS','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="card_six">SOMOS INDEPENDIENTES (Descripción)</label>
                {!! Form::textarea('card_six', $homepages->card_six, array('placeholder' => 'SOMOS INDEPENDIENTES','class' => 'form-control')) !!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar Home Page</button>
              </div>
            </form>
          </div>

	{!! Form::close() !!}
@endsection
