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
    <script src="js/js.js"></script>
</head>
<body>
<div id="logos" class="col-9">
    <img src="img/logoBanca.png" alt="logo banca" class="col-4">
    <img src="img/logoBanca.png" alt="logo banca" class="col-4">
</div>
<div id="divFormulario2" class="col-9">
    <form action="lectura2.php" method="post">
        <p>
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono">
        </p>
        <p>
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email">
        </p>
        <p>
            <label for="email2">Repita correo electrónico</label>
            <input type="email" id="email2" name="email2">
        </p>
        <p>
            <input type="checkbox" id="check">Acepta las <a href="http://agpd.es">Políticas de privacidad</a>
        </p>
        <p>
            <input type="submit" class="boton" name="btnConfirmar" id="btnConfirmar" value="Confirmar" disabled>
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
