
<!-- Hacer la consulta -->
<!-- ... -->
<!-- boton de volver: -->
<!DOCTYPE html>
<!-- declaraciones -->
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../estilo/estilo 2.css">
    <title> Consulta 3 </title>
</head>

<body>
    <?php require("../config/conexion.php") ;
    # Creacion de variables
    $cod_res = $_POST["cod_res"];

    # Construccion consulta
//    $query = "select concat(codigo_vuelo, '-', reserva_id) as codigo_reserva, nombre, valor
//    from reservas,
//         vuelos,
//         personas
//    where reservas.id_vuelo = vuelos.id
//      and reservas.pasaporte_pasajero = personas.pasaporte and codigo_reserva LIKE '%$cod_res%';";

    $query = "select * from consulta_3 where codigo_reserva LIKE '%$cod_res%';";

    #procesamiento consulta
    $result = $db -> prepare($query);
    $result -> execute();

    $data = $result -> fetchAll();
    ?>
    <!-- se crea la tabla -->
    <table>
        <tr>
            <th>código reserva</th>
            <th>nombre</th>
            <th>valor (CLP)</th>
        </tr>

        <?php 
        foreach ($data as $d) {
            echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td></tr>";
        }
        ?>
    </table>
    <?php include('../Templates/footer.html'); ?>

    
</body>
</html>