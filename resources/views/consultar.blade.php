@include('layouts.header')

    <h2>Section title</h2>
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
                    <tr>
                        <td>1</td>
                        <td>Modernización de escuelas pública</td>
                        <td>Asocio Público Privado</td>
                        <td>$900,000,000.00</td>
                        <td>$500,000,000.00</td>
                        <td>$400,000,000.00</td>
                        <td><a href="">Ver detalles</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
@include('layouts.footer')