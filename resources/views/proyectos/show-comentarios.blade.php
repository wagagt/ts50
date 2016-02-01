<div class="row-fluid">
    <div class="span12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        
                        <th>Fecha</th>
                        <th>Horas</th>
                        <th>Avance</th>
                        <th>Prof.<br>Inicial</th>
                        <th>Prof.<br>Final</th>
                        <th>Comentario</th>
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
                        {{ date('d/m/Y',strtotime($comentario->created_at)) }}
                        </td>
                        <td>{{$comentario->horas}}</td>
                        <td>{{$comentario->avance}}</td>
                        <td>{{$profundidad_inicial}}</td>
                        <td>{{$profundidad_final}}</td>
                        <td>{{$comentario->comentario}}</td>
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