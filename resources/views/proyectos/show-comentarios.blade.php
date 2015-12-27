<div class="row-fluid">
    <div class="span12">
        {!! $comentarios->render() !!}
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>

                    <tr>
                        <th>Fecha</th>
                        <th>Avance</th>
                        <th>Horas</th>
                        <th>Comentario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comentarios as $comentario)
                    <tr>
                        <td>{{$comentario->created_at}}</td>
                        <td>{{$comentario->avance}}</td>
                        <td>{{$comentario->horas}}</td>
                        <td>
                            <textarea rows="2" class="form-control col-sm-4 col-lg-6">w{{$comentario->comentario}}</textarea>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! $comentarios->render() !!}
    </div>
</div>