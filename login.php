<?php

include 'conexion.php';
$usuario = $_POST['user'];
$password = $_POST['pass'];

$res_log=mysqli_query($conexion, "SELECT * FROM usuario WHERE email='$usuario' AND pass_usu='$password'");

$res_final=mysqli_num_rows($res_log);

if ($res_final>0) {
    header("location:cpanel.php");
}else{
    echo '<script>
            alert("Datos incorrectos");
            window.history.go(-1);
        </script>';
}