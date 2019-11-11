@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Editar Pregunta
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
                    <a class="btn btn-lg bg-blue" href="{{ route('faqs.index')}}">Regresar</a>        
                </tr>
                        </tbody>
                    </table>  
          </div>


  {!! Form::model($faq, ['method' => 'PATCH','route' => ['faqs.update', $faq->id]]) !!}
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
                  <label for="question">Pregunta:</label>
                {!! Form::text('question', $faq->question, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="content">Contenido Pregunta:</label>
                {!! Form::textarea('content', $faq->content, array('placeholder' => 'Contenido Pregunta','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                  <label for="categories">Categoría:</label>
                       {!! Form::select('categories',$categories, $faq->faq_category_id, array('class' => 'form-control preguntas', 'id' => 'preguntas', 'title' => 'Seleccionar', 'placeholder' => 'Seleccionar', 'required' => 'required' )) !!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar Pregunta</button>
              </div>
            </form>
          </div>

  {!! Form::close() !!}
@endsection
