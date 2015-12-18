@extends('layout.client')

@section('content')
<div class="container">
    <div>
        @include('proyectos.show-fields')
    </div>
</div>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading row-fluid ">
                    <h3>Avances</h3>
        </div>
        <br>
        <div class="col-md-6">
            @if ($isAdmin=="true")
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#commentModal">
                    Agregar Comentarios
                </button>
            @endif
        </div>
        <div class="panel-body">
            <div>
                @include('proyectos.show-comentarios')
            </div>
        </div>
        <div class="panel-footer">
            Comentarios para proyecto:  {!! $proyecto->nombre !!}
        </div>
    </div>
</div>

@if ($isAdmin=="true")
    <!-- MODAL -->
    <div class="modal fade in" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: block; padding-right: 23px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum .
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- MODAL -->        
@endif
@endsection


	