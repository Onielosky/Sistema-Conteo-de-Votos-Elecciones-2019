<?php
include_once('header.php');
include_once('link.php');
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Registro de Usuario</title>

<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>Crear Usuario</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">Nombre:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Ingrese su nombre">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Apellido:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Ingrese su apellido">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Género:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Masculino">Masculino</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Femenino">Femenino</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Correo Electrónico:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo eléctronico">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Ingrese su contraseña">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Registrarte</button>
    </div>
  </div>
</form>
</div>