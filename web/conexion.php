<?php
$servidor = "ec2-3-147-13-229.us-east-2.compute.amazonaws.com";
$baseDeDatos = "portafolio";
$usuario = "luis";
$contraseña = "admin";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contraseña);
    echo "conexion realizada...";
} catch (Exception $error) {
    echo $error->getMessage();
}
?>

