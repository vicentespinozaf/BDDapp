<!DOCTYPE html>
<!-- declaraciones -->
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title> Consultas Aerolineas y Vuelos </title>
</head>

<body>
    <h1 align="center"> Database Artistas </h1>
    <br>
    <br>
    <br>
    <!--  Consultas:  -->
    <!--  Consulta 1:  -->
    <h2 align="center"> Buscar vuelos pendientes de ser aprobados </h2>
    <form align="center" action="Consultas/Consulta_1.php" method="post">
        <!-- <p> Vuelos pendientes de ser aprobados <\p>-->
        <input type="submit" name="Buscar1">
</form>
    <br>
    <br>

    <!--  Consulta 2:  -->
    <h2 align="center"> Buscar vuelos aceptados por aerolinea  </h2>
    <form align="center" action="Consultas/Consulta_2.php" method="post">
        <p> ingrese el código ICAO del destino </p>
        <input type="text" name="ICAO">
        <p> ingrese la aerolinea que realizará el viaje </p>
        <input type="text" name="Aerolinea_1">
        <br>
        <br>
        <input type="submit" name="Buscar2">
</form>
    <br>
    <br>
    <br>

    <!--  Consulta 3:  -->
    <h2 align="center"> Buscar tickets </h2>
    <form align="center" action="Consultas/Consulta_3.php" method="post">
        <p> Ingrese el código de su reserva </p>
        <input type="text" name="cod_res">
        <input type="submit" name="Buscar3">
</form>
    <br>
    <br>
    <br> 

    <!--  Consulta 4:  -->
    <h2 align="center"> Buscar clientes con mayor cantidad de tickets comprados  </h2>
    <form align="center" action="Consultas/Consulta_4.php" method="post">
        <!--<p> Cliente que ha comprado más tickets </p>
        <input type="text" name="aerolinea_4"> -->
        <input type="submit" name="Buscar4">
</form>
    <br>
    <br>

    <!--  Consulta 5:  -->
    <h2 align="center"> Buscar cantidad de vuelos aceptados, rechazados, publicados y borrador </h2>
    <form align="center" action="Consultas/Consulta_5.php" method="post">
        <p> ingrese el nombre de la aerolinea </p>
        <input type="text" name="aerolinea_5">
        <input type="submit" name="Buscar5">
</form>
    <br>
    <br>
    <br>
    <!--  Consulta 6:  -->
    <h2 align="center"> Buscar aerolinea con mayor porcentaje de vuelos aceptados  </h2>
    <form align="center" action="Consultas/Consulta_6.php" method="post">
        <input type="submit" name="Buscar6">
</form>
    <br>
    <br>


</body>
</html>
