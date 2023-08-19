<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $direccion = $_POST["direccion"];
  $correoElectronico = $_POST["correoElectronico"];
  $telefono = $_POST["telefono"];
  $contrasena = $_POST["contrasena"];

  // Cifrar la contraseña antes de almacenarla
  $cifrado_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

  $connection = new mysqli("localhost", "root", "", "wapicr");

  if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
  }

  $query = "INSERT INTO cliente (Nombre, Apellido, Direccion, CorreoElectronico, Telefono, Contrasena, FechaRegistro) VALUES (?, ?, ?, ?, ?, ?, NOW())";
  $stmt = $connection->prepare($query);
  $stmt->bind_param("ssssss", $nombre, $apellido, $direccion, $correoElectronico, $telefono, $cifrado_contrasena);

  if ($stmt->execute()) {
    header("Location: ../layout/login.html"); // Redirigir al inicio de sesión
    exit();
  } else {
    $error_message = "Error al registrar cliente.";
  }

  $stmt->close();
  $connection->close();
}
?>
