<?php

require 'cliente.php';

// Variables
$servername = "172.18.0.2";
$username = "php";
$password = "1234";
$database = "prueba";

$op=$_GET["tipo"];
$busqueda=$_GET["busqueda"];

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$clienteNuevo=new Cliente("prueba","prueba","prueba","prueba","prueba");
$clienteNuevo->buscarCliente($busqueda,$op,$conn);

mysqli_close($conn);

?>
