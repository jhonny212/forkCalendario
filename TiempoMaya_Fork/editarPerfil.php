<?php 
require('./DB/conector.php');
session_start();
$user=$_SESSION['username'];
$sql="SELECT * FROM users WHERE username='".$user."'";
$result=$conexion->query($sql);
$nombre='';
$apellido='';
$nacimiento='';
$telefono='';
$email='';
if ($result->num_rows > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $nombre=$row['nombre'];
    $email=$row['email'];
    $apellido=$row['apellido'];
    $telefono=$row['telefono'];
    $nacimiento=$row['nacimiento'];
    $pass=$row['password'];
 }
 
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiempo Maya</title>


  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">

  <link rel="stylesheet" type="text/css" href="css/estiloPerfil2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://kit.fontawesome.com/e51fb510f5.js" crossorigin="anonymous"></script>

</head>
<?php include "BarradeNavegacion.php" ?>
<body>

<section id="inicio">
<div  >
    <div class="container-fluid mt--7" >
      <div class="row">
        <div class="col-xl-4 order-xl-1 mb-5 mb-xl-0" style="margin-top: 250px;margin-left: 10%;">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="img/perfil.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
              <div class="card-body pt-0 pt-md-4" style="margin-top:50px;">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">643</span>
                      <span class="description">Publicaciones</span>
                    </div>
                    <div>
                      <span class="heading">108</span>
                      <span class="description">Me gusta</span>
                    </div>

                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  Luis Ruiz  <span class="font-weight-light"> <br> Batz</span>
                </h3>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Historiador
                </div>


              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 order-xl-2" style="margin-top: 250px;">
            <form action="#" method="post">
              <input type="text" value="../perfil.php" name="direccion" hidden/>
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Mi cuenta</h3>
                </div>
                <div class="col-4 text-right">
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
              </div>
            </div>
            <div class="card-body">

                <h6 class="heading-small text-muted mb-4">Informacion de usuario</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Usuario</label>
                            <input type="text" name="usuarioAntiguo"  hidden value="<?php echo $usuario['usuario']  ?>" />
                        <input type="text" name="usuario" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $user; ?>" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Correo</label>
                        <input type="email" name="correo" class="form-control form-control-alternative" placeholder="jesse@example.com"  value=" <?php echo $email ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Nombre</label>
                        <input type="text" name="nombre" class="form-control form-control-alternative" placeholder="Nombre"  value="<?php echo $nombre ?>"/>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Apellido</label>
                        <input type="text" name="apellido" class="form-control form-control-alternative" placeholder="Apellido"  value="<?php echo $apellido ?>"/>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">contraseña</label>
                        <input type="password" name="password" class="form-control form-control-alternative" placeholder="******"  value="<?php echo $pass ?>" />
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">

                <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Telefono</label>
                        <input name="telefono" class="form-control form-control-alternative" placeholder="Telefono"  value=" <?php echo $telefono ?> " type="text"/>
                      </div>
                    </div>
                  </div>

                </div>
                <hr class="my-4">



            </div>
          </div>
            </form>
        </div>
      </div>
    </div>
  </div>

</div>
</section>
<footer id="footer">

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Teoria de Sistemas</strong>. Derechos Reservados
    </div>
  </div>
</footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>


</body>

</html>
