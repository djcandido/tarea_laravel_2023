
<!Doctype html>
<html lang="es">
	<head>
  		<title>Informe</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="Author" content="Jaime Jeovanny Cortez Flores">
		<link rel="stylesheet" type="text/css" href="style.css">
        <style>
            @media all and (orientation: landscape) {
                table {
                    border-collapse: collapse;
                    
                }
                tr:nth-child(even) {background: #E2E2E2}
                tr:nth-child(odd) {background: #FFF}
            }
        </style>
	</head>
<body>
    <div style="display:table;margin:auto;">
        <div style="display:table-cell;width:150px;"><img src="{{ url('/storage/logo/logo-csj.png') }}" width="100" height="auto"></img></div>
        <div style="display:table-cell;width:350px;"><h2>Corte Suprema de Justicia</h2></div>
        <div style="display:table-cell;width:150px;"><img src="{{ url('/storage/logo/logo-csj.png') }}" width="100" height="auto"></img></div>
    </div>
    <p>&nbsp;</p>
    <div style="text-align: right;">{{ date("d/m/Y H:i:s"); }}</div>
    <p>&nbsp;</p>
    <table style="width: 100%;" border="0" cellpadding="0" cellspacing="0">
        <thead>
            <tr style="font-size: 14px;">
                <th style="border-bottom: 1px solid black;">Id</th>
                <th style="border-bottom: 1px solid black;">Proyecto</th>
                <th style="border-bottom: 1px solid black;">Fondos</th>
                <th style="border-bottom: 1px solid black;">Monto Planificado</th>
                <th style="border-bottom: 1px solid black;">Monto Patrocinado</th>
                <th style="border-bottom: 1px solid black;">Monto Propio</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data["proyectos"] as $proyecto)
            <tr style="font-size: 16px;">
                <td>{{ $proyecto["id"] }}</td>
                <td>{{ $proyecto["NombreProyecto"] }}</td>
                <td>{{ $proyecto["FuenteFondos"] }}</td>
                <td>${{ number_format(floatval($proyecto["MontoPlanificado"]),2) }}</td>
                <td>${{ number_format(floatval($proyecto["MontoPatrocinado"]),2) }}</td>
                <td>${{ number_format(floatval($proyecto["MontoFondosPropios"]),2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>