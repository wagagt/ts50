@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Estados</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('estados.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($estados->isEmpty())
        <div class="well text-center">No Estados found.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Descripcion</th>
                    <th width="50px">Action</th>
                </thead>
                <tbody>

                    @foreach($estados as $estados)
                    <tr>
                        <td>{!! $estados->descripcion !!}</td>
                        <td>
                            <a href="{!! route('estados.edit', [$estados->id]) !!}"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="{!! route('estados.delete', [$estados->id]) !!}" onclick="return confirm('Está seguro de eliminar éste registro - Estados?')"><i class="fa fa-trash"></i></a>
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