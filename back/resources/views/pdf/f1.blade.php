<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Nro. 1</title>
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
        .text-right {
            text-align: right;
        }

    </style>
</head>
<body>
<img src="{{ public_path('logo.png') }}" alt="Logo" class="text-center" style="width: 150px;">

<div class="text-center text-h1">FORMULARIO Nro. 1</div>
<div class="text-center text-h1">ARTICULACIÓN PLAN OPERATIVO ANUAL (P.O.A.) Y PLAN ESTRATÉGICO INSTITUCIONAL (P.E.I.) </div>
<br>
<table class="table-container">
    <tr>
        <td class="bg-green text-bold">DENOMINACIÓN DE LA INTERVENCIÓN</td>
        <td class="" colspan="3">DIRECCION DEPARTAMENTAL DE EDUCACION ORURO</td>
        <td class="bg-green text-bold">TIPO DE GASTO </td>
        <td class="">GASTO CORRIENTE </td>
    </tr>
    <tr>
        <td class="bg-green text-bold">UNIDAD EJECUTORA</td>
        <td class="">DIRECCION DEPARTAMENTAL DE EDUCACION ORURO</td>
        <td class="bg-green text-bold">CODIGO U.E.</td>
        <td class="">002</td>
        <td class="bg-green text-bold">TIPO DE INTERVENCIÓN</td>
        <td class="">DIRECCION DEPARTAMENTAL DE EDUCACION ORURO</td>
    </tr>
    <tr>
        <td class="bg-green text-bold" rowspan="3">DENOMINACIÓN DE LA INTERVENCIÓN</td>
        <td class="" colspan="3">84- Institucionalización de las instancias de participación social comunitaria como base fundamental del desarrollo de la educación. </td>
        <td class="bg-green text-bold">FECHA</td>
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
        <th class="bg-green" rowspan="2">Código PEI (1)</th>
        <th class="bg-green" rowspan="2">ACCIÓN INSTITUCIONAL ESPECÍFICA (2)</th>
        <th class="bg-green" colspan="3">INDICADOR DE PROCESO 2019 (3)</th>
        <th class="bg-green" rowspan="2">AREA O UNIDAD RESPONSABLE (Direccion, Subdireccion) (4)</th>
        <th class="bg-green" rowspan="2">CODIGO POA (5)</th>
        <th class="bg-green" rowspan="2">ACCION DE CORTO PLAZO GESTION 2020 (6)</th>
        <th class="bg-green" rowspan="2">RESULTADO ESPERADO GESTION  2020 (7)</th>
        <th class="bg-green" rowspan="2">TOTAL PRESUPUESTO  DE GASTO (En Bs.) (8)</th>
    </tr>
    <tr>
        <th class="bg-green">Descripción 2020</th>
        <th class="bg-green">Meta 2020</th>
        <th class="bg-green">Línea base al 2015</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td rowspan="6">3.4.10</td>
        <td rowspan="6">
            {{$periodo->accionInstitucional}}
        </td>
        <td>
            Porcentaje de Universalización del MESCP en los sistemas educativos
        </td>
        <td>
            %50
        </td>
        <td>0</td>
        <td rowspan="6">SER, SEAE, SESFP, DDE, UAA, UAI, UAJ y TPSC</td>
        <td rowspan="6">5</td>
        <td rowspan="6">
            {{$periodo->accionCortoPlazo}}
        </td>
        <td rowspan="3">
            {{$periodo->resultadoEsperado1}}
        </td>
        <td rowspan="6">{{$periodo->totalPresupuesto}}</td>
    </tr>
    <tr>
        <td>Numero de Juntas escolares capacitados</td>
        <td>640</td>
        <td>450</td>
    </tr>
    <tr>
        <td>N° de Bachilleres educación Regular</td>
        <td>10190</td>
        <td>7896</td>
    </tr>
    <tr>
        <td>N° de Bachilleres en educación Alternativa y especial</td>
        <td>631</td>
        <td>618</td>
        <td rowspan="3">
            {{$periodo->resultadoEsperado2}}
        </td>
    </tr>
    <tr>
        <td>Porcentaje participación de los actores sociales</td>
        <td>60%</td>
        <td>20%</td>
    </tr>
    <tr>
        <td>Porcentaje del presupuesto institucional ejecutado anualmente</td>
        <td>86%</td>
        <td>70%</td>
    </tr>
    <tr>
        <td class="bg-green text-right text-bold" colspan="9">TOTAL ACCIÓN ESPECÍFICA DE CORTO PLAZO</td>
        <td class="bg-green text-bold">{{$periodo->totalPresupuesto}}</td>
    </tr>
    <tr>
        <td class="bg-green text-right text-bold" colspan="9"></td>
        <td class="bg-green text-bold"></td>
    </tr>
    <tr>
        <td class="text-right text-bold" colspan="8"></td>
        <td class="bg-green text-right text-bold" >TOTAL GENERAL</td>
        <td class="bg-green text-bold">{{$periodo->totalPresupuesto}}</td>
    </tr>
    </tbody>
</table>
<br>
<table class="table-container">
    <tr>
        <td class="bg-green text-bold" colspan="2">RESPONSABLES DE LA INFORMACIÓN</td>
        <td class="bg-green text-bold">CARGO</td>
        <td class="bg-green text-bold" style="width: 150px" >FIRMA</td>
    </tr>
    <tr>
        <td class="bg-green" style="height: 20px">Elaborado:</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td class="bg-green" style="height: 20px">Aprobado:</td>
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
