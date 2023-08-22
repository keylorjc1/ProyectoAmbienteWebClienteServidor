<?php
session_start();

if (isset($_SESSION["username"])) {
  header("Location: index.html"); // Redirigir a la página principal
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $connection = new mysqli("localhost", "root", "", "wapicr");
  
  if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
  }

  $query = "SELECT CorreoElectronico, Contrasena FROM cliente WHERE CorreoElectronico = ?";
  $stmt = $connection->prepare($query);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->bind_result($user_id, $stored_password);
  $stmt->fetch();
  $stmt->close();

  if ($user_id !== null && password_verify($password, $stored_password)) {
    $_SESSION["username"] = $username;
    $_SESSION["usuario_id"] = $user_id;
    $_SESSION["nombre_cliente"] = obtenerNombreCliente($user_id); // Función para obtener el nombre del cliente
    header("Location: ../index.html");  // Redirigir a la página principal
    session_destroy();
    exit();
  } else {
    $error_message = "Usuario o contraseña incorrectos";
  }

  $connection->close();
  
}

function obtenerNombreCliente($clienteID) {
  $connection = new mysqli("localhost", "root", "", "wapicr");

  if ($connection->connect_error) {
      die("Error de conexión: " . $connection->connect_error);
  }

  $query = "SELECT Nombre FROM cliente WHERE IDCliente = ?";
  $stmt = $connection->prepare($query);
  $stmt->bind_param("i", $clienteID);
  $stmt->execute();
  $stmt->bind_result($nombre);
  $stmt->fetch();
  $stmt->close();

  $connection->close();
  return $nombre;
}
?>
