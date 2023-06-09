@include('layouts.header')
            <div class="card-deck mb-2 text-center">
                <div class="card mb-6 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Consultar</h4>
                    </div>
                    <div class="card-body">
                        <p>En este apartado usted podrá realizar la correspondiente consulta DML de tipo SELECT para obtener y conocer los datos registrados</p>
                        <!--<button type="button" class="btn btn-lg btn-block btn-primary">Ir a consultar</button>-->
                        <a href="{{ URL::route('ver') }}" class="btn btn-lg btn-block btn-primary stretched-link">Ir a consultar</a>
                    </div>
                </div>
                <div class="card mb-6 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Insertar</h4>
                    </div>
                    <div class="card-body">
                        <p>En este apartado, usted podrá realizar las correspondientes inserciones de datos a la tabla, mediante la consulta DML de tipo INSERT</p>
                        <!--<button type="button" class="btn btn-lg btn-block btn-primary">Ir a Insertar</button>-->
                        <a href="{{ URL::route('nuevo') }}" class="btn btn-lg btn-block btn-primary stretched-link">Ir a insertar</a>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-2 text-center">
                <div class="card mb-6 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Actualizar</h4>
                    </div>
                    <div class="card-body">
                        <p>En este apartado, usted podrá realizar las correspondientes actualización o modificaciones a un registro en particular, mediante la consulta DML UPDATE</p>
                        <!--<button type="button" class="btn btn-lg btn-block btn-primary">Ir a Actualizar</button>-->
                        <a href="{{ URL::route('actualizar') }}" class="btn btn-lg btn-block btn-primary stretched-link">Ir a actualizar</a>
                    </div>
                </div>
                <div class="card mb-6 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Eliminar</h4>
                    </div>
                    <div class="card-body">
                        <p>En este apartado, usted podrá realizar las correspondientes eliminaciones de registros a la tabla "proyectos", mediante la consulta DML DELETE</p>
                        <!--<button type="button" class="btn btn-lg btn-block btn-primary">Ir a Eliminar</button>-->
                        <a href="{{ URL::route('eliminar') }}" class="btn btn-lg btn-block btn-primary stretched-link">Ir a eliminar</a>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-2 text-center">
                <div class="card mb-12 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Informe</h4>
                    </div>
                    <div class="card-body">
                        <p>Desde este vínculo usted podrá descargar un informe en documento pdf de todos los registros que se encuentran en la base de datos</p>
                        <!--<button type="button" class="btn btn-lg btn-block btn-primary">Generar Informe</button>-->
                        <a href="{{ URL::route('informe') }}" class="btn btn-lg btn-block btn-primary stretched-link">Generar Informe</a>
                    </div>
                </div>
            </div>
@include('layouts.footer')
