@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Crear Palabra
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

          <div class="row">
              <div class="col-md-3 col-md-offset-1">
                  <div class="box box-solid">
                      <div class="box-header with-border">
                          <h3 class="box-title">Acciones</h3>
                      </div>
                      <div class="box-body">
                          <center>
                  <a class="btn btn-lg bg-blue" href="{{ route('glosaries.index')}}">Regresar</a>    
                          </center>
                      </div>
                  </div>
              </div>
          </div>


  {!! Form::model($glosary, ['method' => 'PATCH','route' => ['glosaries.update', $glosary->id]]) !!}
    {{ csrf_field() }}
          <div class="row">
        <div class="col-md-9 col-md-offset-1">
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Palabra</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Palabra:</label>
                {!! Form::text('name', $glosary->name, array('placeholder' => 'Palabra: ','class' => 'form-control', 'required' => 'required')) !!}
                </div>
                <div class="form-group">
                  <label for="content">Contenido:</label>
                {!! Form::textarea('content', $glosary->content, array('placeholder' => 'Contenido: ','class' => 'form-control', 'required' => 'required')) !!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
              </div>
            </form>
          </div>
        </div>
        </div>
  {!! Form::close() !!}
@endsection
