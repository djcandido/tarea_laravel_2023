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
                        <td><a href="{{$url['url'].'/'.$proyecto['id']}}" class="eliminar-registro" data-url="{{$url['url'].'/'.$proyecto['id']}}">{{$url["etiqueta"]}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@include('layouts.footer')