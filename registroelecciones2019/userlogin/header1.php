<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Administrador</a>
			<ul class="nav navbar-nav">
			<li><a href="registration.php">Registrar Usuario</a></li>
			<li><a href="ingresactas.php">Ingreso de Actas</a></li>
			<li><a href="generareportes.php">Generar Reportes</a></li>
		</ul>
		</div>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="account.php">Tu Perfil</a></li>
    <li><a href="logout.php">Cerrar sesión</a></li>
  </ul>
</div>
	</div>
</nav>

