@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Crear Formulario Comparador
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop

@section('main-content')
  {!! Form::model($form, ['method' => 'PATCH','route' => ['forms.update', $form->id]]) !!}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Acciones</h3>
                </div>
                <div class="box-body">
                  <center>
                  <a class="btn btn-primary btn-block" href="{{ route('forms.index')}}">Regresar</a>    
                  </center>
                  @if($form->long_short == 1)
                    <center>
                    <button id="largosform" type="submit" class="btn btn-success btn-block">Editar Formulario y Editar Camino</button>    
                    </center>
                  @endif
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-10 col-md-offset-1">
 

         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Formulario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nombre Formulario:</label>
                {!! Form::text('name', $form->name, array('placeholder' => 'Nombre Formulario','class' => 'form-control', 'required' => 'required')) !!}
                </div>
               <div class="form-group">
                  <label for="long_short">Tipo Formulario:</label>
                    {!! Form::select('long_short',['0' => 'Corto', '1' => 'Largo',], $form->long_short, array('class' => 'form-control', 'id' => 'tipo', 'placeholder' => 'Seleccionar', 'required' => 'required', 'disabled' => 'disabled')) !!}
                    <input type="hidden" name="long_short" value="{{ $form->long_short }}">
                </div>
               <div id="cortos" class="form-group pregunta hidden">
                  <label for="question_id">Pregunta:</label>
                    {!! Form::select('question_id',$questions,[], array('class' => 'form-control preguntas', 'id' => 'preguntas', 'title' => 'Seleccionar', 'placeholder' => 'Seleccionar')) !!}
                </div>

              <!-- /.box-body -->
 
            </form>
          </div>

 
          </div>
          </div>
  {!! Form::close() !!}
@endsection

@section('js')
  <script type="text/javascript">
    $('#tipo').on('change', function() {
            if (this.value == '0') {
                $('#cortos').show().removeClass('hidden');
                $('#cortoform').show().removeClass('hidden');
                $('#largosform').show().addClass('hidden');
                $('#largos').show().addClass('hidden');

            } 
            if (this.value == '1'){
                $('#cortos').show().addClass('hidden');
                $('#largos').show().removeClass('hidden');
                $('#largosform').show().removeClass('hidden');
                $('#cortoform').show().addClass('hidden');
            }
            if (this.value == ''){
                $('#cortos').show().addClass('hidden');
                $('#largos').show().addClass('hidden');
                $('#cortoform').show().addClass('hidden');
                $('#largosform').show().addClass('hidden');

            }
    });
  </script>
@stop