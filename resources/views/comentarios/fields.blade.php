<!--- Avance Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!--- Avance Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('avance', 'Avance:') !!}
    {!! Form::text('avance', null, ['class' => 'form-control']) !!}
</div>

<!--- Horas Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('horas', 'Horas:') !!}
    {!! Form::text('horas', null, ['class' => 'form-control']) !!}
</div>

<!--- Id Usuario Field --->
    {!! Form::hidden('id_usuario', Auth::user()->id) !!} 

<!--- Id Proyecto Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_proyecto', 'Id Proyecto:') !!}
    {!! Form::select('id_proyecto', $proyecto_options, Input::old('id_proyecto'),  ['class' => 'form-control']) !!}
</div>

<!--- Comentario Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('comentario', 'Comentario:') !!}
    {!! Form::textarea('comentario', null, ['class' => 'form-control', 'size' => '30x5']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Grabar', ['class' => 'btn btn-primary']) !!}
</div>
