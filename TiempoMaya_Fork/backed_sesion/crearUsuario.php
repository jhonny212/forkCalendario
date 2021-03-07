<?php 
require('../DB/conector.php');
$user=$_POST['username'];
$pass=$_POST['password'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];


$rol=$_POST['rol'];
$sql="INSERT INTO users values ('".$user."','".$pass."',".$rol.",'".$email."','".$nombre."','".$apellido."','2000-01-01','".$telefono."')";
$msj="";
if ($conexion->query($sql) === TRUE) {
    $msj="Registro exitoso";
  } else {
    $msj="No se pudo registrar";
  }
  $conexion->close();
header("location: ../index.php?error=".$msj)
?>