

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
    # Creacion de variables
    $aerolinea = $_POST["aerolinea_5"];

    # Construccion consulta
//    $query = "select cta.id_compania, (cta.aceptados * 100.0) / (total.total * 100.0) as porcentaje
//    from (select id_compania, count(estado) as aceptados
//          from vuelos
//          where estado = 'aceptado'
//             or estado = 'publicado'
//          group by (id_compania)) as cta,
//         (select id_compania, count(id_compania) as total from vuelos group by id_compania) as total
//    where cta.id_compania = total.id_compania
//    order by porcentaje desc
//    limit 1;";

    $query = "select * from consulta_6;";

    #procesamiento consulta
    $result = $db -> prepare($query);
    $result -> execute();

    $data = $result -> fetchAll();
    ?>
    <!-- se crea la tabla -->
    <table>
        <tr>
            <th>compañía</th>
            <th>porcentaje</th>
        </tr>

        <?php 
        foreach ($data as $d) {
            echo "<tr><td>$d[0]</td><td>$d[1]</td></tr>";
        }
        ?>
    </table>
    <?php include('../Templates/footer.html'); ?>

    
</body>
</html>