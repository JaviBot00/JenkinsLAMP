<?php




require 'productos.php';

//Variables
$servername = "127.0.0.1:3366";
$username = "php";
$password = "1234";
$database = "prueba";

// Establecer conexión con la base de datos y verificar la conexión
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: ".$conn->connect_error);
}

// Datos del formulario
$cod = $_POST['cod'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];


// Creación de nuevo objeto Producto
$productoNuevo = new Producto($cod,$descripcion,$precio,$stock);

// Inserción del Producto en la BBDD
$productoNuevo->insertarProducto($conn);


$conn->close();


?>
