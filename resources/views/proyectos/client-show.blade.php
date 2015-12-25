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
@endsection


	