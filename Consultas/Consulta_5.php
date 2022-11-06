
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
    $query = "select id_compania, estado, count(estado)
    from vuelos, companias
    where vuelos.id_compania = companias.id and companias.nombre LIKE '%$aerolinea%'
    group by (id_compania, estado)
    order by id_compania;";

    #procesamiento consulta
    $result = $db -> prepare($query);
    $result -> execute();

    $data = $result -> fetchAll();
    ?>
    <!-- se crea la tabla -->
    <table>
        <tr>
            <th>Compañía</th>
            <th>Estado</th>
            <th> Cantidad de vuelos</th>
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