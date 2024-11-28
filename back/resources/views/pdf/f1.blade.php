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
            font-size: 8px;
        }
        body {
            padding: 20px;
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

    </style>
</head>
<body>

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
        <td class="">{{ date('d/m/Y') }}</td>
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
        <th class="bg-green">Código PEI (1)</th>
        <th class="bg-green">Acción Institucional Específica (2)</th>
        <th class="bg-green">Indicador de Proceso (3)</th>
        <th class="bg-green">Área o Unidad Responsable (4)</th>
        <th class="bg-green">Código POA (5)</th>
        <th class="bg-green">Acción de Corto Plazo Gestión 2020 (6)</th>
        <th class="bg-green">Resultado Esperado Gestión 2020 (7)</th>
        <th class="bg-green">Total Presupuesto de Gasto (Bs.) (8)</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>3.4.10</td>
        <td>Lograr la participación, corresponsabilidad social comunitaria y armonizada de todos los actores involucrados en la educación en el departamento.</td>
        <td>
            <ul>
                <li>Porcentaje de Universalización del MESCp en los sistemas educativos.</li>
                <li>Número de Juntas escolares capacitadas: 640 (2020).</li>
                <li>N° de Bachilleres educación Regular: 10,190 (2020).</li>
                <li>N° de Bachilleres en educación Alternativa y Especial: 631 (2020).</li>
                <li>Porcentaje de participación de los actores sociales: 60% (2020).</li>
                <li>Porcentaje del presupuesto institucional ejecutado anualmente: 86% (2020).</li>
            </ul>
        </td>
        <td>SER, SEA, SEFP, DDE, UAA, IAJ, UAJ y TPSC</td>
        <td>5</td>
        <td>
            Universalizar el Modelo Educativo Socio-Comunitario Productivo (MESCp) y lograr la participación, corresponsabilidad social comunitaria y armonizada de todos los actores involucrados en la educación en el departamento de Oruro, en la gestión 2020.
        </td>
        <td>
            Se incentivó la participación activa de padres y madres de familia, y organizaciones sociales en la implementación de los documentos curriculares.
        </td>
        <td>2,186,420</td>
    </tr>
    </tbody>
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
