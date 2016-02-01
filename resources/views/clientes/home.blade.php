@extends('client')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Proyectos....</h1>
        </div>

       <div class="row">
            @if(!$proyectos)
                <div class="well text-center">No Proyectos found.</div>
            @else
                <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <th>Nombre</th>
        			<th>Profundidad</th>
        			<th>Perforado</th>
        			<th>Maquina</th>
        			<th>Diámetro</th>
        			<th>Método</th>
        			<th>Observaciones</th>
                    </thead>
                    <tbody>
                     
                    @foreach($proyectos as $proyecto)
                        <tr>
                            <td><a href="proyectos/{!! $proyecto->id !!}">{!! $proyecto->nombre !!} </a></td>
        					<td>{!! $proyecto->profundidad !!}(pies)</td>
        					<td>{!! $proyecto->perforado !!}</td>
        					<td>{!! $proyecto->maquina !!}</td>
        					<td>{!! $proyecto->diametro !!} pulg.</td>
        					<td>{!! $proyecto->metodo !!}</td>
        					<td>{!! $proyecto->observaciones !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
@endsection