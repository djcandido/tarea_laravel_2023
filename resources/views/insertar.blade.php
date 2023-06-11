@include('layouts.header')
    <!--<nav aria-label="breadcrumb">-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb }}</li>
        </ol>
    <!--</nav>-->
    <h2>Registros de proyectos</h2>
    <div class="table-responsive">
        <div class="card">
            <div class="card-header">
                Crear un nuevo proyecto
            </div>
            <div class="card-body">
                <h5 class="card-title">Formulario para el registro de un proyecto nuevo</h5>
                <p class="card-text">Por favor, complete el formulario</p>
                <form name="nuevos_datos" id="nuevos_datos" method="post" action="{{ $url_post }}">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre_proyecto">Nombre del proyecto (*)</label>
                            <input type="text" class="form-control" id="nombre_proyecto" name="nombre_proyecto" maxlength="100">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fuente_fondo">Fondos del proyecto (*)</label>
                            <input type="text" class="form-control" id="fuente_fondo" name="fuente_fondo" maxlength="25">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="monto_planificado">Monto Planificado (*)</label>
                            <input type="number" step="0.01" class="form-control" id="monto_planificado" name="monto_planificado" min="0.00" max="999999999.99">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="monto_patrocinado">Monto Patrocinado (*)</label>
                            <input type="number" step="0.01" class="form-control" id="monto_patrocinado" name="monto_patrocinado" min="0.00" max="999999999.99">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="monto_propio">Monto Fondos Propios (*)</label>
                            <input type="number" step="0.01" class="form-control" id="monto_propio" name="monto_propio" min="0.00" max="999999999.99">
                        </div>
                    </div>
                </form>
                <button type="button" class="btn btn-primary float-right" name="btn_guardar" id="btn_guardar" form="nuevos_datos">Guardar</button>
            </div>
            <div class="card-footer text-muted">
                (*)Todos los campos son obligatorios
            </div>
        </div>
    </div>
@include('layouts.footer')