<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Nombre', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Contacto Nombres Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Contacto Nombres', 'Contacto Nombres:') !!}
    {!! Form::text('contact_fname', null, ['class' => 'form-control']) !!}
</div>

<!--- Contacto Apellidos Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Contacto Apellidos', 'Contacto Apellidos:') !!}
    {!! Form::text('contact_lname', null, ['class' => 'form-control']) !!}
</div>

<!--- Id Rol Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Rol', 'Rol:') !!}
    <!--{!! Form::text('id_rol', null, ['class' => 'form-control']) !!}-->
    {!! Form::select('id_rol', $rol_options , Input::old('id_rol'), ['class' => 'form-control']) !!}
</div>

<!--- email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- Id Cliente Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Cliente', 'Cliente:') !!}
    <!--{!! Form::text('id_cliente', null, ['class' => 'form-control']) !!}-->
    {!! Form::select('id_cliente', $cliente_options, Input::old('id_cliente'), ['class' => 'form-control']) !!}
</div>

<!--- Password  Cliente Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Clave', 'Clave:') !!} Mínimo 6 caracteres.
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!--- Password  Confirmation Cliente Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Confirmar Clave', 'Confirmar Clave:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Grabar', ['class' => 'btn btn-primary']) !!}
</div>
