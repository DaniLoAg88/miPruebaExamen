<?php
session_start();

$errores = array();

if(!empty($_POST["telefono"]) && !empty($_POST["email"]) && !empty($_POST["email2"])){

    $telefono = $_POST["telefono"];
    $expReg = "/^(?:(?:\+|00)?34)?[679]\d{8}$/";

    if(!preg_match($expReg, $telefono)){
        $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Los telefonos deben tener formato 000000000 y empezar en 6, 7 o 9</p>";
    }

    $email = $_POST["email"];
    $email2 = $_POST["email2"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Introduzca un email correcto</p>";
    }

    if(!($email == $email2)){
        $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Los email introducidos no coinciden</p>";
    }

}else{
    $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Todos los datos son requeridos</p>";
}


if(count($errores) > 0){
    for($x = 0; $x < count($errores); $x++){
        $cadena .= $errores[$x];  //Vamos acumulando los errores del array
    }

    header("Location: paso2.php?cadena=".$cadena);

}else {

    $_SESSION["telefono"] = $_POST["telefono"];
    $_SESSION["email"] = $_POST["email"];

    header("Location: confirmacion.php");
}
