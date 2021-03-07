<?php
require('../DB/conector.php');
$user=$_POST['username'];
$pass=$_POST['password'];

$sql="SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'";
$msj="";
$result=$conexion->query($sql);
if ($result->num_rows > 0) {
    session_start();
    while($row = mysqli_fetch_assoc($result)) {
       $_SESSION['rol']=$row['rol'];
       $_SESSION['username']=$row['username'];
    }
    $conexion->close();  
    $msj="location: ../index.php?error=Inicio de sesion exitosamente, puede navegar".$msj;
    
  } else {
    $conexion->close();  
    $msj="location: ../iniciarSesion.php?error=Error al logearse".$msj;
  }

  header($msj);
?>