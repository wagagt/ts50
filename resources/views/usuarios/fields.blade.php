<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Contacto Nombres Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contacto_nombres', 'Contacto Nombres:') !!}
    {!! Form::text('contacto_nombres', null, ['class' => 'form-control']) !!}
</div>

<!--- Contacto Apellidos Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contacto_apellidos', 'Contacto Apellidos:') !!}
    {!! Form::text('contacto_apellidos', null, ['class' => 'form-control']) !!}
</div>

<!--- Id Rol Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_rol', 'Id Rol:') !!}
    {!! Form::text('id_rol', null, ['class' => 'form-control']) !!}
</div>

<!--- Id Rol Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_rol', 'Id Rol:') !!}
    {!! Form::text('id_rol', null, ['class' => 'form-control']) !!}
</div>

<!--- Id Cliente Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    {!! Form::text('id_cliente', null, ['class' => 'form-control']) !!}
</div>

<!--- Id Cliente Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    {!! Form::text('id_cliente', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Grabar', ['class' => 'btn btn-primary']) !!}
</div>
