<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pruebas examen</title>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div id="logos" class="col-9">
        <img src="img/logoBanca.png" alt="logo banca" class="col-4">
        <img src="img/logoBanca.png" alt="logo banca" class="col-4">
    </div>
    <div id="divFormulario" class="col-9">
        <form action="lectura1.php" method="post">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre">
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos">
            </p>
            <p>
                <label for="dni">DNI</label>
                <input type="text" id="dni" name="dni">
            </p>
            <p>
                <label for="edad">Edad</label>
                <input type="number" id="edad" name="edad" min="16">
            </p>
            <p>
                <input type="submit" class="boton" name="btnSiguiente" id="btnSiguiente" value="Siguiente">
            </p>
            <p>
                <?php
                if(isset($_GET["cadena"])){
                    echo "<p class='mensaje'>".$_GET["cadena"]."</p>";
                }
                ?>
            </p>
        </form>
    </div>
</body>
</html>