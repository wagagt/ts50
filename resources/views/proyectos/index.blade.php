@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Proyectos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('proyectos.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($proyectos->isEmpty())
        <div class="well text-center">No Proyectos found.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Profundidad</th>
                    <th>Perforado</th>
                    <th>Maquina</th>
                    <th>Metodo</th>
                    <th>Observaciones</th>
                    <th>Cliente</th>
                    <th>Estado</th>
                    <th width="50px">Action</th>
                </thead>
                <tbody>

                    @foreach($proyectos as $proyectos)
                    <tr>
                        <td><a href="proyectos/{!! $proyectos->id !!}">{!! $proyectos->nombre !!} </a></td>
                        <td>{!! $proyectos->profundidad !!}</td>
                        <td>{!! $proyectos->perforado !!}</td>
                        <td>{!! $proyectos->maquina !!}</td>
                        <td>{!! $proyectos->metodo !!}</td>
                        <td>{!! $proyectos->observaciones !!}</td>
                        <td>{!! $proyectos->cliente->nombre !!}</td>
                        <td>{!! $proyectos->estado->descripcion !!}</td>

                        <td>
                            <a href="proyectos/{!! $proyectos->id !!}"> <i class="fa fa-comments-o"></i></a>
                            <a href="{!! route('proyectos.edit', [$proyectos->id]) !!}"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="{!! route('proyectos.delete', [$proyectos->id]) !!}" onclick="return confirm('Está seguro de eliminar éste registro - Proyectos?')"><i class="fa fa-trash"></i></a>
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