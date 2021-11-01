<?php
include("conexion.php");

$nombre =$_POST['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Email'];
$contraseña = $_POST['Password'];
$tipo = 1;

$consulta = "INSERT INTO usuarios( Nombre, Apellido, Correo, Contraseña) VALUES ('$nombre','$apellido','$correo','$contraseña')";
$resultado = mysqli_query($conexion,$consulta);
mysqli_close($conexion);
?>