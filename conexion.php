<?php
$conexion=mysqli_connect("db","userdb","ariel","tienda");

    if (!$conexion) {
    echo 'Error de conexion con la BDD';
}
