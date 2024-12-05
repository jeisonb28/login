<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Motocicletas Funcionario Alcanos De Colombia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed; /* Esto ajusta automáticamente las columnas */
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px;
            text-align: left;
            word-wrap: break-word; /* Permite que el texto se ajuste dentro de las celdas */
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Lista de Motocicletas Funcionario Alcanos De Colombia</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Ciudad</th>
                <th>Tipo de Moto</th>
                <th>Cilindraje</th>
                <th>Kilometraje</th>
                <th>Fecha SOAT</th>
                <th>Fecha Tecnomecánica</th>
                <th>Expedición Tarjeta</th>
                <th>Estado Llantas</th>
                <th>Estado Luces</th>
                <th>Espejos</th>
                <th>Bocina</th>
                <th>Documentación</th>
                <th>Líquido de Frenos</th>
                <th>Aceite</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($motocicletas as $motocicleta)
                <tr>
                    <td>{{ $motocicleta->nombre }}</td>
                    <td>{{ $motocicleta->apellido }}</td>
                    <td>{{ $motocicleta->cedula }}</td>
                    <td>{{ $motocicleta->ciudad }}</td>
                    <td>{{ $motocicleta->tipo_moto }}</td>
                    <td>{{ $motocicleta->cilindraje }}</td>
                    <td>{{ $motocicleta->kilometraje }}</td>
                    <td>{{ $motocicleta->fecha_soat }}</td>
                    <td>{{ $motocicleta->fecha_tecnomecanica }}</td>
                    <td>{{ $motocicleta->expedicion_tarjeta }}</td>
                    <td>{{ $motocicleta->estado_llantas }}</td>
                    <td>{{ $motocicleta->estado_luces }}</td>
                    <td>{{ $motocicleta->espejos }}</td>
                    <td>{{ $motocicleta->bocina }}</td>
                    <td>{{ $motocicleta->documentacion }}</td>
                    <td>{{ $motocicleta->liquido_frenos }}</td>
                    <td>{{ $motocicleta->aceite }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
