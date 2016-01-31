@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Comentarios</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('comentarios.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($comentarios->isEmpty())
        <div class="well text-center">No Comentarios found.</div>
        @else {!! $comentarios->render() !!}
        <div class="alt-table-responsive">
            <table class="table table-striped table-bordered" >
                <thead>
                    <th>Fecha</th>
                    <th>Avance</th>
                    <th>Horas</th>
                    <th>Comentario</th>
                    <th class="td-style">Action</th>
                </thead>
                <tbody>
                    @foreach($comentarios as $comentario)
                    <tr>
                        <td>{{$comentario->created_at}}</td>
                        <td>{{$comentario->avance}}</td>
                        <td>{{$comentario->horas}}</td>
                        <td>
                            <textarea rows="3" cols="50" disabled>{{$comentario->comentario}}</textarea>
                        </td>
                        <td class="td-style text-center">
                            <a href="{!! route('comentarios.edit', [$comentario->id]) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"> Editar</i></a>
                            <a href="{!! route('comentarios.delete', [$comentario->id]) !!}" class="btn btn-danger" onclick="return confirm('Está seguro de eliminar éste registro - Comentarios?')"><i class="fa fa-trash"> Eliminar</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! $comentarios->render() !!} @endif
    </div>
</div>
@endsection
