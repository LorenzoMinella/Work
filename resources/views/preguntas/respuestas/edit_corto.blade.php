@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Respuestas
@endsection
@section('contentheader_title') {{-- TITULO DEL CONTENIDO DE LA VISTA --}}

@stop


@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Acciones</h3>
                </div>
                <div class="box-body">
 
  
                              {!!link_to_route('answers_short.index', $title = 'Regresar',
                              $parameters = ['id' => $id,
                                             'id_form' => $form_id],
                              $attributes = ['class'=>'btn btn-warning btn-block']);!!} 
                    <a class="btn btn-primary btn-block" href="{{ route('forms.index')}}">Finalizar</a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="box box-primary">
        {!! Form::model($answer, ['method' => 'PATCH','route' => ['answers_short.update', $answer->id]]) !!}
          {{ csrf_field() }}



               <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">{{ \App\Question::where('id', '=', $id)->first()->title }}</h3> 
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form">
                    <div class="box-body">
              <div class="col-md-12">
                        <div id="respuesta" class="form-group respuesta">
                          <label for="content">Respuesta:</label>
                        {!! Form::text('content', $answer->content, array('placeholder' => 'Respuesta','class' => 'form-control')) !!}
                        </div>
                    </div>
                    </div>
                    <!-- /.box-body -->
                    <input type="hidden" name="question_id" value="{{ $id }}">
                    <input type="hidden" name="form_id" value="{{ $form_id }}">
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Editar Respuesta</button>
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
                        <th>Respuesta</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>
            @foreach ($answers as $answer)
            <tr>
              <td>{{ $answer->id }}</td>

              <td>
                  @if($answer->content === null)
                    <p align="justify">
                      No Aplica
                    </p>
                  @endif
                  <p align="justify">
                    {{ $answer->content }}
                  </p>
              </td>

              <td><center>
                              {!!link_to_route('answers_short.edit', $title = 'Editar',
                              $parameters = ['answer_id' => $answer->id,
                                       'id_form' => $form_id,
                                       'id_question' => $id],
                              $attributes = ['class'=>'btn btn bg-primary']);!!}  
                {!! Form::open(['method' => 'DELETE','route' => ['answers_short.destroy', $answer->id],'style'=>'display:inline']) !!}
                              <input type="hidden" name="form_id" value="{{ $form_id }}">
                          <input type="hidden" name="question_id" value="{{$id}}">
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