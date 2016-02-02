@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Proyectos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('proyectos.create') !!}">Agregar Nuevo</a>
    </div>
    <div class="row">
        @if(count($proyectos)<1)
        <div class="well text-center">No Proyectos found.</div>
        @else
        <div class="table-responsive">
            <div class="row col-md-12">
                    <div class="col-md-2">
                        <h4><a href="#" class="btn btn-primary-tab">Ingresado <i class="fa fa-sign-in"></i></a></h4>
                    </div>
                    <div class="col-md-2">
                        <h4><a href="#" class="btn btn-work">Trabajando <i class="fa fa-building"></i></a></h4>
                    </div>
                    <div class="col-md-2">
                        <h4><a href="#" class="btn btn-suspend">Suspendido  <i class="fa fa-pause"></i></a></h4>
                    </div>
                    <div class="col-md-2">
                        <h4><a href="#" class="btn btn-final"> Terminado  <i class="fa fa-stop"></i></a></h4>
                    </div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Profundidad</th>
                    <th class="text-center">Perforado</th>
                    <th class="text-center">Máquina</th>
                    <th class="text-center">Método</th>
                    <th class="text-center">Diámetro</th>
                    <th class="text-center">Cliente</th>
                    <th class="text-center">Estado</th>
                    <th class="td-style-projects text-center">Action</th>
                </thead>

                <tbody>

                    @foreach($proyectos as $proyectos)
                    <tr>
                        <?php
                          $status = $proyectos->id_estado;
                          switch($status)
                          {
                              case 1:
                                    $colors = 'table-in';
                                    break;
                              case 2: 
                                    $colors = 'table-work';
                                    break;
                              case 3:
                                    $colors = 'table-suspend';
                                    break;
                              case 4:
                                    $colors = 'table-danger';
                                    break;
                          }
                            
                        ?>
                        
                        <td class="{!! $colors !!} td-style-proy"><a href="proyectos/{!! $proyectos->id !!}">{!! $proyectos->nombre !!} </a></td>
                        <td class="text-center {!! $colors !!}">{!! $proyectos->profundidad !!}(pies)</td>
                        <td class="{!! $colors !!}">{!! $proyectos->perforado !!}</td>
                        <td class="{!! $colors !!}">{!! $proyectos->maquina !!}</td>
                        <td class="text-justify {!! $colors !!}">{!! $proyectos->metodo !!}</td>
                        <td class="text-center {!! $colors !!}">{!! $proyectos->diametro !!} pulg.</td>
                        <td class="{!! $colors !!}">{!! $proyectos->cliente->nombre !!}</td>
                        <td class="text-justify {!! $colors !!}">{!! $proyectos->estado->descripcion !!}</td>
                        <td class="td-style-projects text-center">
                            <a href="proyectos/{!! $proyectos->id !!}" class="btn btn-info"> <i class="fa fa-comments-o"> Comentarios </i></a>
                            <a href="{!! route('proyectos.edit', [$proyectos->id]) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"> Editar</i></a>
                            <a href="{!! route('proyectos.delete', [$proyectos->id]) !!}" class="btn btn-danger" onclick="return confirm('Está seguro de eliminar éste registro - Proyectos?')"><i class="fa fa-trash"> Elimiar</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right {!! $colors !!}" >Observaciones</td>
                        <td class="text-left {!! $colors !!}" colspan="7" >{!! $proyectos->observaciones !!}</td>
                    </tr>
                    <tr><td colspan="9"><td></tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection