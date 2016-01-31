@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Roles</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('roles.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($roles->isEmpty())
        <div class="well text-center">No Roles found.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Descripcion</th>
                    <th class="td-style">Action</th>
                </thead>
                <tbody>

                    @foreach($roles as $roles)
                    <tr>
                        <td>{!! $roles->descripcion !!}</td>
                        <td class="td-style text-center">
                            <a href="{!! route('roles.edit', [$roles->id]) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"> Editar</i></a>
                            <a href="{!! route('roles.delete', [$roles->id]) !!}" class="btn btn-danger" onclick="return confirm('Está seguro de eliminar éste registro - Roles?')"><i class="fa fa-trash"> Eliminar</i></a>
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