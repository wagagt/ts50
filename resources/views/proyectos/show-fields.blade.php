
<!--- Profundidad Field --->
<div class="form-group col-sm-6 col-lg-4 col-xs-6">
    {!! Form::label('profundidad', 'Profundidad:') !!}
    {!! $proyecto->profundidad !!}
</div>

<!--- Perforado Field --->
<div class="form-group col-sm-6 col-lg-4 col-xs-6">
    {!! Form::label('perforado', 'Perforado:') !!}
    {!! $proyecto->perforado !!}
</div>

<!--- Maquina Field --->
<div class="form-group col-sm-6 col-lg-4 col-xs-6">
    {!! Form::label('maquina', 'Máquina:') !!}
    {!! $proyecto->maquina!!}
</div>

<!--- Metodo Field --->
<div class="form-group col-sm-6 col-lg-4 col-xs-6">
    {!! Form::label('metodo', 'Método:') !!}
    {!! $proyecto->metodo !!}
</div>

<!--- Diametro Field --->
<div class="form-group col-sm-6 col-lg-4 col-xs-6">
    {!! Form::label('diametro', 'Diámetro:') !!}
    {!! $proyecto->diametro !!} (pulg)
</div>

<!--- Id Cliente Field --->
<div class="form-group col-sm-6 col-lg-4 col-xs-6">
    {!! Form::label('id_cliente', 'Cliente:') !!}
    {!! $proyecto->cliente->nombre !!}
</div>

<!--- Id Estado Field --->
<div class="form-group col-sm-6 col-lg-4 col-xs-6">
    {!! Form::label('id_estado', 'Estado:') !!}
    {!! $proyecto->estado->descripcion !!}
</div>

<!--- Observaciones Field --->
<div class="form-group col-sm-6 col-lg-4 col-xs-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! $proyecto->observaciones !!}
</div>

