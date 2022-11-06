
<!-- Hacer la consulta -->
<!-- ... -->
<!-- boton de volver: -->
<!DOCTYPE html>
<!-- declaraciones -->
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../estilo/estilo 2.css">
    <title> Consulta 2 </title>
</head>

<body>
    <?php require("../config/conexion.php") ;
    # Creacion de variables
    $icao = $_POST["ICAO"];
    $aerolinea = $_POST["Aerolinea_1"];

    # Construccion consulta
//    $query = "select vuelos.id, estado, icao, companias.nombre
//    from vuelos, aerodromos, companias
//    where vuelos.id_aerodromo_llegada = aerodromos.id and companias.id = vuelos.id_compania
//    and lower(companias.nombre) LIKE lower('%$aerolinea%') and icao LIKE '%$icao%';";

    $query = "select * from consulta_2 where lower(id_compania) LIKE lower('%$aerolinea%') and icao LIKE '%$icao%'; ";

    #procesamiento consulta
    $result = $db -> prepare($query);
    $result -> execute();

    $data = $result -> fetchAll();
    ?>
    <!-- se crea la tabla -->
    <table>
        <tr>
            <th>Id</th>
            <th>estado</th>
            <th>ICAO</th>
            <th>id Compañía</th>
        </tr>

    
        <div class="container">
        <?php
        $pass_1 = $_POST["passenger_id_1"];
        $pass_2 = $_POST["passenger_id_2"];
        $pass_3 = $_POST["passenger_id_3"];
        # $vuelo = $_POST["vuelo"];
        echo "<p>$pass_1</p>";
        echo "<p>$pass_2</p>";
        if (!(empty(pass_1) && empty(pass_2) && empty(pass_3))) {
            echo " Debe rellenar alguno de los campos. ";
        }
        else {
            
        }

        ?>
        
    </div>

</body>
</html>