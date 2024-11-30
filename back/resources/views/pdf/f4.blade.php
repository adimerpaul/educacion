<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Nro. 4</title>
    <style>
        * {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 9px;
        }
        body {
            padding: 30px;
        }
        .table-container {
            width: 100%;
            border-collapse: collapse;
        }
        .table-container th, .table-container td {
            border: 1px solid #000;
            padding: 5px;
            /*text-align: center;*/
        }
        .header-row {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        .footer-row {
            background-color: #d9e3ab;
            font-weight: bold;
        }
        .text-center {
            text-align: center;
        }
        .text-h1 {
            font-size: 12px;
            font-weight: bold;
        }
        .text-bold {
            font-weight: bold;
        }
        .bg-green {
            background-color: #d9e3ab;
        }
        .bg-yhellow {
            background-color: #fdfda1;
        }
        .text-right {
            text-align: right;
        }

    </style>
</head>
<body>
<img src="{{ public_path('logo.png') }}" alt="Logo" class="text-center" style="width: 150px;">

<div class="text-center text-h1">FORMULARIO Nro. 4</div>
<div class="text-center text-h1">DETERMINACIÓN DE ACCIÓN ESPECÍFICA, COSTEO POR OPERACIÓN Y TAREA</div>
<br>
<table class="table-container">
    <tr>
        <td class="bg-yhellow text-bold">DENOMINACIÓN DE LA INTERVENCIÓN</td>
        <td class="" colspan="3">DIRECCION DEPARTAMENTAL DE EDUCACION ORURO</td>
        <td class="bg-yhellow text-bold">TIPO DE GASTO </td>
        <td class="">GASTO CORRIENTE </td>
    </tr>
    <tr>
        <td class="bg-yhellow text-bold">UNIDAD EJECUTORA</td>
        <td class="">{{ $user->area->nombre }}</td>
        <td class="bg-yhellow text-bold">CODIGO U.E.</td>
        <td class="">002</td>
        <td class="bg-yhellow text-bold">TIPO DE INTERVENCIÓN</td>
        <td class="">DIRECCION DEPARTAMENTAL DE EDUCACION ORURO</td>
    </tr>
    <tr>
        <td class="bg-yhellow text-bold" rowspan="3">DENOMINACIÓN DE LA INTERVENCIÓN</td>
        <td class="" colspan="3">84- Institucionalización de las instancias de participación social comunitaria como base fundamental del desarrollo de la educación. </td>
        <td class="bg-yhellow text-bold">FECHA</td>
        <td class="">{{ date('d/m/Y H:i:s') }}</td>
    </tr>
    <tr>
        <td class="" colspan="3">00- Actividad Central</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td class="" colspan="3">09- Participacion de Diferentes actores para el desarrollo de la gestion educativa</td>
        <td></td>
        <td></td>
    </tr>
</table>
<br><br>
<table class="table-container">
    <thead>
    <tr>
        <th class="bg-yhellow" rowspan="2">CODIGO POA (5)</th>
        <th class="bg-yhellow" rowspan="2">ACCIÓN DE CORTO PLAZO GESTION 2024 (6)</th>
        <th class="bg-yhellow" rowspan="2">OPERACIÓN (Componente del Proyecto) (12)</th>
        <th class="bg-yhellow" rowspan="2">ACTIVIDAD Tarea (13)</th>
        <th class="bg-yhellow" colspan="6" >BIEN O SERVICIO DEMANDADO (19)</th>
        <th class="bg-yhellow" rowspan="2">FECHA EN LA QUE SE REQUIERE (20)</th>
        <th class="bg-yhellow" rowspan="2">PPTO. GASTO (21)</th>
    </tr>
    <tr>
        <th class="bg-yhellow">PARTIDA PPTARIA.</th>
        <th class="bg-yhellow">DESCRIPCION Y/O JUSTIFICACIÓN MATERIAL</th>
        <th class="bg-yhellow">CANT.</th>
        <th class="bg-yhellow">UNIDAD DE MEDIDA</th>
        <th class="bg-yhellow">PRECIO UNIT. REF.</th>
        <th class="bg-yhellow">TOTAL</th>
    </tr>
    </thead>
    <tbody>
    @php
        $total = 0;
    @endphp
    @foreach($poa->detalles as $detalle)
        <tr>
            <td>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                {{isset($detalle->material) ? $detalle->material->partida : ''}}
            </td>
            <td>
                {{isset($detalle->material) ? $detalle->material->descripcion : ''}}
            </td>
            <td>
                {{$detalle->cantidad}}
            </td>
            <td>
                {{isset($detalle->material) ? $detalle->material->unidad : ''}}
            </td>
            <td>
                {{$detalle->precio_unitario}}
            </td>
            <td class="text-right">
                {{$detalle->precio_unitario * $detalle->cantidad}}
            </td>
            <td>
                @php
                    $total += $detalle->precio_unitario * $detalle->cantidad;
                    $inicio = date('Y-01-01');
                    $fin = date('Y-12-31');
                    echo $inicio . ' al ' . $fin;
                @endphp
            </td>
            <td class="text-right">
                {{$detalle->precio_unitario * $detalle->cantidad}}
            </td>
        </tr>
    @endforeach
    <tr>
        <td class="bg-yhellow text-right text-bold" colspan="11">TOTAL TAREA </td>
        <td class="bg-yhellow text-bold text-right">{{$total}}</td>
    </tr>
    <tr>
        <td class="bg-yhellow text-right text-bold" colspan="11">TOTAL OPERACIÓN </td>
        <td class="bg-yhellow text-bold text-right">{{$total}}</td>
    </tr>
    <tr>
        <td class="bg-yhellow text-right text-bold" colspan="11">TOTAL ACCIÓN ESPECÍFICA DE CORTO PLAZO</td>
        <td class="bg-yhellow text-bold"></td>
    </tr>
    <tr>
        <td class="text-right text-bold" colspan="10"></td>
        <td class="bg-yhellow text-right text-bold" >TOTAL GENERAL</td>
        <td class="bg-yhellow text-bold text-right">{{$total}}</td>
    </tr>
    </tbody>
</table>
<br>
<table class="table-container">
    <tr>
        <td class="bg-yhellow text-bold" colspan="2">RESPONSABLES DE LA INFORMACIÓN</td>
        <td class="bg-yhellow text-bold">CARGO</td>
        <td class="bg-yhellow text-bold" style="width: 150px" >FIRMA</td>
    </tr>
    <tr>
        <td class="bg-yhellow" style="height: 20px">Elaborado:</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td class="bg-yhellow" style="height: 20px">Aprobado:</td>
        <td>Lic. Oscar Copa  Gonzales</td>
        <td>Director Departamental de Educacion Oruro</td>
        <td></td>
    </tr>
</table>

{{--<h2>Total Acción Específica de Corto Plazo</h2>--}}
{{--<table class="table-container">--}}
{{--    <tr>--}}
{{--        <td class="text-bold">Total:</td>--}}
{{--        <td>2,186,420</td>--}}
{{--    </tr>--}}
{{--</table>--}}

</body>
</html>
