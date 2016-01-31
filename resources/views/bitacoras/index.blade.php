@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Bitacoras</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('bitacoras.create') !!}">Agregar Nuevo</a>
        </div>

        <div class="row">
            @if($bitacoras->isEmpty())
                <div class="well text-center">No Bitacoras found.</div>
            @else
                <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
            			<th>Usuario</th>
            			<th>Acción</th>
            			<th>Fecha</th>
                        <th class="td-style">Action</th>
                    </thead>
                    <tbody>
                    @foreach($bitacoras as $bitacora)
                        <tr>
        					<td>{!! $bitacora->usuario->name !!}</td>
        					<td>{!! $bitacora->accion !!}</td>
        					<td>{!! $bitacora->created_at !!}</td>
                            <td class="td-style text-center">
                                <a href="{!! route('bitacoras.edit', [$bitacora->id]) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"> Editar</i></a>
                                <a href="{!! route('bitacoras.delete', [$bitacora->id]) !!}" class="btn btn-danger" onclick="return confirm('Está seguro de eliminar éste registro - Bitacora?')"><i class="fa fa-trash"> Eliminar</i></a>
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