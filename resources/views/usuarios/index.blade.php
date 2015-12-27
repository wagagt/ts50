@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Usuarios</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('usuarios.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($usuarios->isEmpty())
        <div class="well text-center">No Usuarios found.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Contacto Nombres</th>
                    <th>Contacto Apellidos</th>
                    <th>Id Rol</th>
                    <th>Id Rol</th>
                    <th>Id Cliente</th>
                    <th>Id Cliente</th>
                    <th width="50px">Action</th>
                </thead>
                <tbody>

                    @foreach($usuarios as $usuarios)
                    <tr>
                        <td>{!! $usuarios->nombre !!}</td>
                        <td>{!! $usuarios->contacto_nombres !!}</td>
                        <td>{!! $usuarios->contacto_apellidos !!}</td>
                        <td>{!! $usuarios->id_rol !!}</td>
                        <td>{!! $usuarios->id_rol !!}</td>
                        <td>{!! $usuarios->id_cliente !!}</td>
                        <td>{!! $usuarios->id_cliente !!}</td>
                        <td>
                            <a href="{!! route('usuarios.edit', [$usuarios->id]) !!}"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="{!! route('usuarios.delete', [$usuarios->id]) !!}" onclick="return confirm('Está seguro de eliminar éste registro - Usuarios?')"><i class="fa fa-trash"></i></a>
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