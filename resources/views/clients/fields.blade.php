<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Contact Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contact_name', 'Contact Name:') !!}
    {!! Form::text('contact_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Contact Last Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contact_last_name', 'Contact Last Name:') !!}
    {!! Form::text('contact_last_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- Tels Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tels', 'Tels:') !!}
    {!! Form::text('tels', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Grabar', ['class' => 'btn btn-primary']) !!}
</div>
