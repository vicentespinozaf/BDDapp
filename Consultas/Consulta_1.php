
<!-- Hacer la consulta -->
<!-- ... -->
<!-- boton de volver: -->
<!DOCTYPE html>
<!-- declaraciones -->
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../estilo/estilo 2.css">
    <title> Consulta 1 </title>
</head>

<body>
    <?php require("../config/conexion.php") ;
    # Construccion consulta
//     $query = "select id
//     from vuelos
//     where estado = 'pendiente';";

    $query = "select * from consulta_1;";

    #procesamiento consulta
    $result = $db -> prepare($query);
    $result -> execute();

    $data = $result -> fetchAll();
    ?>
    <!-- se crea la tabla -->
    <table>
        <tr>
            <th>Id</th>
            <th>Aerodromo de salida</th>
            <th>Aerodromo_salida</th>
            <th>Ruta</th>
            <th>Codigo Vuelo</th>
            <th>Aeronave</th>
            <th>Compania</th>
            <th>Salida</th>
            <th>LLegada</th>
            <th>Velocidad</th>
            <th>Altitud</th>
            <th>Valor</th>
        </tr>

        <?php
        foreach ($data as $d) {
            echo "<tr>
                    <td>$d[0]</td>
                    <td>$d[1]</td>
                    <td>$d[2]</td>
                    <td>$d[3]</td>
                    <td>$d[4]</td>
                    <td>$d[5]</td>
                    <td>$d[6]</td>
                    <td>$d[7]</td>
                    <td>$d[8]</td>
                    <td>$d[9]</td>
                    <td>$d[10]</td>
                    <td>$d[12]</td>
                  </tr>";
        }
        ?>
    </table>
    <?php include('../Templates/footer.html'); ?>


</body>
</html>