<?php
 session_start();
 // Obtengo los datos cargados en el formulario de login.
 $email = $_POST['user'];
 $password = $_POST['password'];

  // Datos para conectar a la base de datos.
  $nombreServidor = "localhost";
  $nombreUsuario = "administrador";
  $passwordBaseDeDatos = "Admin.123321";
  $nombreBaseDeDatos = "LineaTiempo";
 
  // Crear conexión con la base de datos.
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
  
  
  // Consulta segura para evitar inyecciones SQL.
     $result = mysqli_query($conn, "SELECT * FROM Usuario WHERE username = '$email' AND password= '$password'");
     $usuario = $result->fetch_array(MYSQLI_ASSOC);    
     if(mysqli_num_rows($result )>0){
        $verRango = "SELECT * from Rol WHERE idRol= ".$usuario['rol'];
        $rangoRS = mysqli_query($conn, $verRango);
        $rango = $rangoRS->fetch_array(MYSQLI_ASSOC); 
        $usuario =  $result->fetch_array(MYSQLI_ASSOC);
        $_SESSION['nombre'] = $nombreUsuario;
        $_SESSION['rango'] = $rango['tipo'];
        // Guardo en la sesión el rango del usuario.
      
            header("Location: ../index.php"); 
      }else{
        
        echo '
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <body>
          <div class="alert alert-success" role="alert"  style="margin-left:300px; margin-right:300px;">
              <h4 class="alert-heading">Correo o Contraseña incorrecto</h4>
              <p> no se encuentra registrado como '.$rango.'</p>
              <hr>
              <form class="form-horizontal" action="../iniciarSesion.php" method="post">
                <input name="tupoUser"  value="'.$rango.'" style="display: none;">
                <button type="submit" class="btn btn-danger btn-lg btn-block" id="boton">regresar</button>
              </form>
          </div> 
        </body>'; //si no existe el usuario
      }
    

?>