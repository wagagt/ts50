@extends('app')

@section('content')
<div class="container">
      @include('flash::message')
    <div>
        @include('proyectos.show-fields')
    </div>
</div>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading row-fluid ">
                    <h3>Avances</h3>
        </div>
        <br>
        <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                 <i class="fa fa-comments-o"></i> Agregar Comentarios
                </button>
        </div>
        <div class="panel-body">
            <div>
                @include('proyectos.show-comentarios')
            </div>
        </div>
        <div class="panel-footer">
            Comentarios para proyecto:  {!! $proyecto->nombre !!}
        </div>
    </div>
</div>

    <!-- MODAL -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Comentario a Proyecto:  <strong>{!! $proyecto->nombre !!}</strong></h4>
          </div>
          <div class="modal-body">
            {!! Form::open(['route' => 'comentarios.store']) !!}
                <!--- Avance Field --->
                <div class="row">
                    <div class="form-group col-sm-4 col-lg-6">
                        {!! Form::label('avance', 'Avance:') !!}
                        {!! Form::text('avance', null, ['class' => 'form-control']) !!}
                    </div>
                <!--- Horas Field --->
                    <div class="form-group col-sm-4 col-lg-6">
                        {!! Form::label('horas', 'Horas:') !!}
                        {!! Form::text('horas', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <!--- Comentario Field --->
                <div class="row">
                    <div class="form-group col-sm-6 col-lg-12">
                        {!! Form::label('comentario', 'Comentario:') !!}
                        {!! Form::textarea('comentario', null, ['class' => 'form-control', 'size' => '50x5']) !!}
                    </div>
                </div>
                <!--- Id Usuario Field --->
                    {!! Form::hidden('id_usuario', Auth::user()->id) !!} 
                <!--- Id Proyecto Field --->
                    {!! Form::hidden('id_proyecto', $proyecto->id) !!}
                <!--- Id Proyecto Field --->
                    {!! Form::hidden('pathReturn', 'proyecto') !!} 
          </div>
          <div class="modal-footer">
              <!--- Submit Field --->
                <!--<div class="form-group col-sm-12">-->
                <!--    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
                <!--</div>-->
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Grabar Comentarios</button>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <!-- MODAL -->        
@endsection

@section('script')
    <script type="text/javascript">
      
    </script>
@endsection


	