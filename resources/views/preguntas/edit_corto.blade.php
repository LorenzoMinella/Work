@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Preguntas Formulario Comparador
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-3 col-md-offset-1">
                  <br>
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Acciones</h3>
                </div>
                <div class="box-body">
                              {!!link_to_route('questions_short.index', $title = 'Regresar',
                              $parameters = ['id' => $id_form],
                              $attributes = ['class'=>'btn btn-warning btn-block']);!!}  
                    <a class="btn btn-primary btn-block" href="{{ route('forms.index')}}">Finalizar</a>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-md">
            <div class="box box-primary">
  {!! Form::model($question, ['method' => 'PATCH','route' => ['questions_short.update', $question->id]]) !!}
    {{ csrf_field() }}


               <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Editar Pregunta</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="title">Titulo Pregunta:</label>
                      {!! Form::text('title', $question->title, array('placeholder' => ' Titulo Pregunta','class' => 'form-control', 'required' => 'required')) !!}
                      </div>
                    </div>
                    <!-- /.box-body -->
                            <input type="hidden" name="form_id" value="{{ $id_form }}">
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Editar Pregunta</button>
                    </div>
                  </form>
                </div>

        {!! Form::close() !!}
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
              <th>Pregunta</th>
              <th>Acción</th>
            </tr>
                    </thead>
                    <tbody>
            @foreach ($questions as $question)
            <tr>
              <td>{{ $question->id }}</td>
              <td><center>{{ $question->title }}</center></td>
              <td><center>
                              {!!link_to_route('answers.index', $title = 'Respuestas',
                              $parameters = ['id' => $question->id,
                                       'form_id' => $id_form],
                              $attributes = ['class'=>'btn btn bg-orange']);!!}  

                              {!!link_to_route('questions.edit', $title = 'Editar',
                              $parameters = ['id_question' => $question->id,
                                       'id_form' => $id_form],
                              $attributes = ['class'=>'btn btn bg-primary']);!!}  

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
