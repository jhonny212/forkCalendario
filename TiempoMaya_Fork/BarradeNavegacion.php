<?php
    session_start();
?>

<header id="header">
  <div class="container">
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active">
          <a href="index.php" style="color: white;font-size: 12px;">
            TIEMPO MAYA
          </a>
        </li>
        <li><a href="LineaDeTiempo.php">Linea del Tiempo</a></li>
        <li><a href="CalendarioHaab.php">Calendario Haab</a></li>
        <li><a href="CalendarioCholqij.php">Calendario Cholquij</a></li>
        <li><a href="./backend_nahuales/ruedaCalendarica.php">Rueda Calendarica</a></li>
        <li><a href="backend_nahuales/nahuales.php">Nahuales</a></li>
        <li><a href="editarPerfil.php" target="_blank" rel="noopener noreferrer">Perfil</a></li>
        <?php
        if (isset($_SESSION['username'])) {
            echo '<li><a href="backed_sesion/cerrarSesion.php">Cerrar Sesion</a></li>';
        }else{
            echo '<li><a href="iniciarSesion.php">Iniciar Sesion</a></li>
            <li><a href="registrarse.php">Registrarse</a></li>';
        }
        ?>
      </ul>
    </nav>
  </div>
</header>
