<?php
include("ConexionBD.php");

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Correo'];
$contra = $_POST['Passwd'];

$solicitud = "INSERT INTO registrarusuario (Nombre,Apellido,Correo_Electronico,Contraseña) 
values ('$nombre', '$apellido','$correo',aes_encrypt('$contra','AES'))";


$resultado = mysqli_query($conexion,$solicitud);


//header("location: geneacoach/Register.html");
?>
