<?php
include("conexion.php");
// pedidos de datos del formulario login
$correo = $_POST['Email'];
$contraseña = $_POST['Password'];

session_start();
// Globalizaciond e variable
$_SESSION['correo']=$correo;
// consulta
$consulta = "SELECT * FROM GeneaCoachBD WHERE Correo_Electronico='$correo and Contraseña= $contraseña'";
// validacion de datos
$validacion = mysqli_query($conexion,$consulta);
// guardado de array
$tuplas = mysqli_fetch_array($validacion);
// 
// if (tuplas['']) {
//     # code...
// }
mysqli_free_result($validacion);
mysqli_close($conexion);
?>