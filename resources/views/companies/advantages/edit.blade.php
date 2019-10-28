@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Crear Ventaja/Desventaja
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
                                  {!!link_to_route('advantages.index', $title = 'Regresar',
                                  $parameters = ['id' => $advantages->company_id],
                                  $attributes = ['class'=>'btn btn-lg bg-blue']);!!}  
                </tr>
                        </tbody>
                    </table>  
          </div>


  {!! Form::model($advantages, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['advantages.update', $advantages->id]]) !!}
    {{ csrf_field() }}



         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Ventaja/Desventaja</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="content">Contenido:</label>
                {!! Form::text('content', $advantages->content, array('placeholder' => 'Contenido','class' => 'form-control', 'required' => 'required')) !!}
                </div>
                <div class="form-group">
                  <label for="advatage_disadvantage">Ventaja/Desventaja:</label>
                {!! Form::select('advatage_disadvantage',['0' => 'Ventaja', '1' => 'Desventaja',], $advantages->advatage_disadvantage, array('placeholder' => 'Seleccionar', 'class' => 'form-control', 'required' => 'required')) !!}
                </div>
                    <input type="hidden" name="company_id" value="{{$advantages->company_id}}">
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar Ventaja/Desventaja</button>
              </div>
            </form>
          </div>

  {!! Form::close() !!}
@endsection
