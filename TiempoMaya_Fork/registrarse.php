<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Main</title>
</head>
<body>
    <style>
        .main-container{
            width: 35%;
            margin: 100px  auto;
            padding: 20px 20px 60px;
            -webkit-box-shadow: 13px 10px 5px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 13px 10px 5px -4px rgba(0,0,0,0.75);
            box-shadow: 13px 10px 5px -4px rgba(0,0,0,0.75);
            background: gray;
            color:white;
        }
        body{
        background: url("./img/fondo.png") ;
        background-size: cover;
        }
        .nav-menu > li > a:before {
        background-color: black;
        }
    </style>
    <div>
        <header id="header">
            <?php include 'BarradeNavegacion.php'; ?>>
        </header>
    </div>
    <div class="main-container">
        <form method="POST" action="backed_sesion/crearUsuario.php">
            <div class="form-group">
                <h1 style="text-align: center;">Registrarse</h1>
            </div>
            <div class="form-group">
              <label for="InputUser">nombre</label>
              <input type="text" name="nombre" class="form-control" id="InputUser" required aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="InputUser">apellidos</label>
              <input type="text" name="apellido" class="form-control" id="InputUser" required aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="InputUser">email</label>
              <input type="email" name="email" class="form-control" id="InputUser" required aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="InputUser">telefono</label>
              <input type="number" name="telefono" class="form-control" id="InputUser" required aria-describedby="emailHelp">
            </div>

            
            
            <div class="form-group">
              <label for="InputUser">Usuario</label>
              <input type="text" name="username" class="form-control" id="InputUser" required aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="InputPass">Contrase??a</label>
              <input type="password" name="password" class="form-control" required id="InputPass">
            </div>
            <div class="form-group">
              <label for="InputUser">Rol</label>
              <select name="rol" required id="">
                <option value="1">Administrador</option>
                <option value="0">Usuario</option>
                
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </form>
    </div>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
</body>
</html>
