@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Crear Categoría
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
                    <a class="btn btn-lg bg-blue" href="{{ route('faqs_categories.index')}}">Regresar</a>       
                </tr>
                        </tbody>
                    </table>  
          </div>


  {!! Form::model($faq, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['faqs_categories.update', $faq->id]]) !!}
    {{ csrf_field() }}


         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Categoría</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="category_name">Nombre Categoría:</label>
                {!! Form::text('category_name', $faq->category_name, array('placeholder' => 'Nombre Categoría: ','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="category_icon">Icono Categoría:</label>
          {!!Form::file('category_icon', array('class' => 'form-control'))!!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar Categoría</button>
              </div>
            </form>
          </div>

  {!! Form::close() !!}
@endsection
