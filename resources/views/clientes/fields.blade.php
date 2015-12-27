<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre de cliente:') !!}
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

<!--- Telefono Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!--- Direccion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('direccion', 'Dirección:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Grabar', ['class' => 'btn btn-primary']) !!}
</div>
