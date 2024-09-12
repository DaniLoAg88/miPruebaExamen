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
<div id="divConfirmacion" class="col-9">
        <p>
            <?php
            session_start();

            $destinatario = $_SESSION["email"];
            $remitente = "dani@dani.cursoceat.es";
            $asunto = "Registro online";
            $mensaje = "Hola ".$_SESSION["nombre"]."<br><br>Se ha registrado correctamente en nuestro servicio de banca online. 
                <br>En breve un agente se comunicará para realizar una videoconferencia y confirmar sus datos.
                <br><br>¡Gracias por confiar en nosotros!";

            $cabeceras = "MIME-Version: 1.0\r\n";
            $cabeceras .= "Content-type: text/html; charset=UTF-8\r\n";
            $cabeceras .= "Content-Transfer-Encoding: 8bit\r\n";
            $cabeceras .= "From: $remitente\r\n";

            Try{
                @mail($destinatario, $asunto, $mensaje, $cabeceras);
                echo "Se ha enviado un correo electrónico a $destinatario para confirmar sus datos de registro.";
            }catch (Throwable $e) {
                echo "Se ha producido un error. " . $e->getMessage();
            }
            ?>
        </p>
</div>
</body>
</html>
