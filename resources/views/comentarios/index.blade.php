@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Comentarios</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('comentarios.create') !!}">Add New</a>
    </div>

    <div class="row">
        @if($comentarios->isEmpty())
        <div class="well text-center">No Comentarios found.</div>
        @else {!! $comentarios->render() !!}
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Fecha</th>
                    <th>Avance</th>
                    <th>Horas</th>
                    <th>Comentario</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($comentarios as $comentario)
                    <tr>
                        <td>{{$comentario->created_at}}</td>
                        <td>{{$comentario->avance}}</td>
                        <td>{{$comentario->horas}}</td>
                        <td>
                            <textarea rows="2" cols="50">{{$comentario->comentario}}</textarea>
                        </td>
                        <td>
                            <a href="{!! route('comentarios.edit', [$comentario->id]) !!}"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="{!! route('comentarios.delete', [$comentario->id]) !!}" onclick="return confirm('Está seguro de eliminar éste registro - Comentarios?')"><i class="fa fa-trash"></i></a>
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
