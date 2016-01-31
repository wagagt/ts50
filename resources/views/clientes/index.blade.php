@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Clientes</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('clientes.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($clientes->isEmpty())
        <div class="well text-center">No Clientes found.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Contacto Nombres</th>
                    <th>Contacto Apellidos</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th class="td-style">Action</th>
                </thead>
                <tbody>

                    @foreach($clientes as $clientes)
                    <tr>
                        <td>{!! $clientes->nombre !!}</td>
                        <td>{!! $clientes->contacto_nombres !!}</td>
                        <td>{!! $clientes->contacto_apellidos !!}</td>
                        <td>{!! $clientes->telefono !!}</td>
                        <td>{!! $clientes->direccion !!}</td>
                        <td>{!! $clientes->email !!}</td>
                        <td class="td-style text-center">
                            <a href="{!! route('clientes.edit', [$clientes->id]) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"> Editar</i></a>
                            <a href="{!! route('clientes.delete', [$clientes->id]) !!}" class="btn btn-danger" onclick="return confirm('Está seguro de eliminar éste registro - Clientes?')"><i class="fa fa-trash"> Eliminar</i></a>
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