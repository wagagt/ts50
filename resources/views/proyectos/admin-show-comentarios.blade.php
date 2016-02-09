<div class="row-fluid">
    <div class="span12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        
                        <th>Fecha (d/m/a)</th>
                        <th>Horas</th>
                        <th>Avance</th>
                        <th>Profundidad<br>Inicial (pies)</th>
                        <th>Profundidad<br>Final (pies)</th>
                        <th>Comentario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $profundidad_inicial=0;
                        $profundidad_final=0
                    ?>
                    @foreach($comentarios as $comentario)
                    <?php 
                        $profundidad_final=$profundidad_final+$comentario->avance;
                    ?>
                    <tr>
                        <td>
                        {{ date('d/m/Y',strtotime($comentario->fecha)) }}
                        </td>
                        <td>{{$comentario->horas}}</td>
                        <td>{{$comentario->avance}}</td>
                        <td>{{$profundidad_inicial}}</td>
                        <td>{{$profundidad_final}}</td>
                        <td id="comentario_{{$comentario->id}}">{{$comentario->comentario}}</td>
                        <td>
                        <a id="modalDel" class="btn btn-app" data-id="{{$comentario->id}}">
                        <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php 
                        $profundidad_inicial=$profundidad_final;
                    ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>