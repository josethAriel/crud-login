<?php
include 'conexion.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$user = $_POST["user"];
$pass = $_POST["password"];
$telf = $_POST["telf"];

//Consulta SQL para insertar datos

$sql_insertar="INSERT INTO usuario (nom_usu,apell_usu,email,user_usu,pass_usu,telf_usu) 
VALUES ('$nombre','$apellido','$email','$user','$pass','$telf')";

//Consulta SQL para validar datos
$validacion_usu = mysqli_query($conexion,"SELECT * FROM usuario WHERE user_usu='$user'") ;
$validacion_email = mysqli_query($conexion,"SELECT * FROM usuario WHERE email='$email'") ;

if (mysqli_num_rows($validacion_usu)>0) {
    echo '<script>
            alert("El usuario no esta disponible");
            window.history.go(-1);
        </script>';
    exit;
}

if (mysqli_num_rows($validacion_email)>0) {
    echo '<script>
            alert("Correo electronico ya existente");
            window.history.go(-1);
        </script>';
    exit;
}

//Proceso de ejecucion
$resultado = mysqli_query($conexion,$sql_insertar);
if (!$resultado) {
    echo 'ERROR no se guardo la informacion';
} else {
    echo '<script>
            alert("Usuario Registrado correctamente");
            window.history.go(-2);
        </script>';
    exit;
}

//Cerrar la conexion
mysqli_close($conexion);


