<!--- Accion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('accion', 'Accion:') !!}
    {!! Form::text('accion', null, ['class' => 'form-control']) !!}
</div>

<!--- Id Usuario Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::text('id_usuario', null, ['class' => 'form-control']) !!}
</div>

<!--- Id Usuario Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::text('id_usuario', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Grabar', ['class' => 'btn btn-primary']) !!}
</div>
