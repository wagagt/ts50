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
                    <th width="50px">Action</th>
                </thead>
                <tbody>

                    @foreach($roles as $roles)
                    <tr>
                        <td>{!! $roles->descripcion !!}</td>
                        <td>
                            <a href="{!! route('roles.edit', [$roles->id]) !!}"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="{!! route('roles.delete', [$roles->id]) !!}" onclick="return confirm('Está seguro de eliminar éste registro - Roles?')"><i class="fa fa-trash"></i></a>
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