<?php
session_start();

$errores = array();

if(!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["dni"]) && !empty($_POST["edad"])){

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];

    if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>El nombre debe ser texto sin numeros</p>";
    }

    if(!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)){
        $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Los apellidos deben ser texto sin numeros</p>";
    }

    $dni = $_POST["dni"];
    $expReg = '/^[0-9]{8}[A-Za-z]{1}$/';

    //preg_match() te comprueba la expresión regular pasada dentro de la variable que indicamos
    if(!preg_match($expReg, $dni) || !validarLetra($dni)){
        $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>El DNI introducido no es valido</p>";
    }

    //No es necesario verificar la edad ya que es un campo numérico y ya hemos comprobado arriba que no viene vacío


}else{
    $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Todos los datos son requeridos</p>";
}


if(count($errores) > 0){
    for($x = 0; $x < count($errores); $x++){
        $cadena .= $errores[$x];  //Vamos acumulando los errores del array
    }

    header("Location: index.php?cadena=".$cadena);

}else {
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["apellidos"] = $_POST["apellidos"];
    $_SESSION["dni"] = $_POST["dni"];
    $_SESSION["edad"] = $_POST["edad"];

    header("Location: paso2.php");
}

function validarLetra($dni) {
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

    //Cogemos desde la posición 0, 8 caracteres, dejando fuera el 9 que será la letra y nos quedamos sólo con los números
    $numeroDNI = substr($dni,0,8);

    //Calculamos el resto de los números, y nos da la posición de la letra
    $resto = $numeroDNI % 23;

    //Comprobamos en el "array" de caracteres la posición que nos ha dado el resto, y lo comparamos con la letra (pasandola a mayuscula) de la posición 8 del DNI(letra)
    if($letras[$resto] == strtoupper(substr($dni, 8, 1))){
        return true;
    }else{
        return false;
    }

}
