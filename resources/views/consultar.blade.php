@include('layouts.header')
    <!--<nav aria-label="breadcrumb">-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb }}</li>
        </ol>
    <!--</nav>-->
    <h2>Registros de proyectos</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre del proyecto</th>
                        <th>Fuente de los fondos</th>
                        <th>Monto planificado</th>
                        <th>Monto patrocinado</th>
                        <th>Monto fondos propios</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto["id"] }}</td>
                        <td>{{ $proyecto["NombreProyecto"] }}</td>
                        <td>{{ $proyecto["FuenteFondos"] }}</td>
                        <td>${{ number_format(floatval($proyecto["MontoPlanificado"]),2) }}</td>
                        <td>${{ number_format(floatval($proyecto["MontoPatrocinado"]),2) }}</td>
                        <td>${{ number_format(floatval($proyecto["MontoFondosPropios"]),2) }}</td>
                        <td><a href="{{$url['url'].'/'.$proyecto['id']}}" class="link_ver_detalles" data-id="{{ $proyecto['id'] }}" data-url="{{$url['url'].'/'.$proyecto['id']}}" data-toggle="modal" data-target="#verDetalles">{{$url["etiqueta"]}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="verDetalles" tabindex="-1" aria-labelledby="verDetallesLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verDetallesLabel">Detalles del proyecto seleccionado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row ml-1">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nom_proyecto">Nombre del Proyecto:</label>
                                    <div id="nom_proyecto"><b></b></div>
                                    <!--<small id="nom_proyectoHelp" class="form-text text-muted">Esta es una breve explicación.</small>-->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fuente_fondo">Fuente de los fondos:</label>
                                    <div id="fuente_fondo"><b></b></div>
                                    <!--<small id="fuente_fondoHelp" class="form-text text-muted">Esta es una breve explicación.</small>-->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="monto_plan">Monto Planificado:</label>
                                    <div id="monto_plan"><b></b></div>
                                    <!--<small id="monto_planHelp" class="form-text text-muted">Esta es una breve explicación.</small>-->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="monto_patro">Monto Patrocinado:</label>
                                    <div id="monto_patro"><b></b></div>
                                    <!--<small id="monto_patroHelp" class="form-text text-muted">Esta es una breve explicación.</small>-->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="monto_propio">Monto Fondos Propios:</label>
                                    <div id="monto_propio"><b></b></div>
                                    <!--<small id="monto_propioHelp" class="form-text text-muted">Esta es una breve explicación.</small>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <!--<button type="button" class="btn btn-primary">Guardar</button>-->
                    </div>
                </div>
            </div>
        </div>
@include('layouts.footer')