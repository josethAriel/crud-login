<?php

include('conexion.php');

if (isset($_POST['save_producto'])) {
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $query = "INSERT INTO producto (nombre, descripcion) VALUES ('$nombre', '$descripcion')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: cpanel.php');

}

?>