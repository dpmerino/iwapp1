<?php

    //ENLACE A LA BASE DE DATOS
    $conect = new mysqli("127.0.0.1", "root", "", "iwapp1db");

    if (!$conect) {
        echo "no toy";
    }
    echo "Llego a la base";

    extract($_POST);

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $tipoUser = $_POST['tipoUser'];

    $sql= "insert into USUARIOS values ('','$nombres','$apellidos','$correo','$tipoUser')";
    $resSql= mysqli_query($conect, $sql);

    if(!$resSql) {
        echo "Creo tienes mal la sentencia";
    }
    echo "Todo OK";

    $query = "SELECT * FROM `usuarios`";

    $result = $mysqli->query($query);

    echo $query;
  /*  echo $nombres ." " . $apellidos."<br>";

    if ($edad >= 65) {
        echo "Usted pertenece a la tercera edad";
        return;
    }
    if ($edad >= 18) {
        echo "Usted es mayor de edad";
        return;
    }
    if ($edad < 18) {
        echo "Usted es menor de edad";
        return;
    }*/

   /* echo $nombres;
    echo $apellidos;
    echo $correo;
    echo $tipoUser;*/
?>