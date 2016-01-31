@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Usuarios</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('users.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($users->isEmpty())
        <div class="well text-center">No Users found.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Contacto Nombres</th>
                    <th>Contacto Apellidos</th>
                    <th>Email</th>
                    <th>Id Rol</th>
                    <th>Id Cliente</th>
                    <th class="td-style">Action</th>
                </thead>
                <tbody>

                    @foreach($users as $users)
                    <tr>
                        <td>{!! $users->name !!}</td>
                        <td>{!! $users->contact_fname !!}</td>
                        <td>{!! $users->contact_lname !!}</td>
                        <td>{!! $users->email !!}</td>
                        <td>{!! $users->rol->descripcion !!}</td>
                        <td>{!! $users->cliente->nombre !!}</td>
                        <td class="td-style text-center">
                            <a href="{!! route('users.edit', [$users->id]) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"> Editar</i></a>
                            <a href="{!! route('users.delete', [$users->id]) !!}" class="btn btn-danger" onclick="return confirm('Está seguro de eliminar éste registro - Users?')"><i class="fa fa-trash"> Eliminar</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection