<?php
include(conexion.php);

$sql = "SELECT * FROM usuarios;


if(!empty($_POST)) {
  $nombre = htmlspecialchars($_POST [nombre]);
  $apellido = htmlspecialchars($_POST [apellido]);
  $correo = htmlspecialchars($_POST [correo]);
}

$sql = "INSERT INTO usuarios (nombre, apellido, correo)
VALUES ('$nombre', '$apellido', '$correo')";

if ($conn->query($sql) === TRUE) {
    header('Location: ej-conexion.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>