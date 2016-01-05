<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre de Proyecto:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Profundidad Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('profundidad', 'Profundidad:') !!}
    {!! Form::text('profundidad', null, ['class' => 'form-control']) !!}
</div>

<!--- Diametro Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('diametro', 'Diámetro (pulg):') !!}
    {!! Form::text('diametro', null, ['class' => 'form-control']) !!}
</div>

<!--- Perforado Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('perforado', 'Perforado:') !!}
    {!! Form::text('perforado', null, ['class' => 'form-control']) !!}
</div>

<!--- Maquina Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maquina', 'Máquina:') !!}
    {!! Form::select('maquina', $maquina_options, Input::old('maquina'), ['class' => 'form-control']) !!}
</div>

<!--- Metodo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('metodo', 'Método:') !!}
    {!! Form::select('metodo', $metodo_options, Input::old('metodo'),  ['class' => 'form-control']) !!}
</div>

<!--- Id Cliente Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_cliente', 'Cliente:') !!}
    {!! Form::select('id_cliente', $cliente_options, Input::old('id_cliente'), ['class' => 'form-control']) !!}
</div>

<!--- Id Estado Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_estado', 'Estado:') !!}
    {!! Form::select('id_estado', $estado_options, Input::old('id_estado'),  ['class' => 'form-control']) !!}
</div>

<!--- Observaciones Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'size' => '30x3']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Grabar', ['class' => 'btn btn-primary']) !!}
</div>
