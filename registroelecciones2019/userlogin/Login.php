<?php
include_once('header.php');
include_once('link.php');

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Inicio de Sesión</title>

<div id="frmRegistration">
<form class="form-horizontal" method="POST" action="login_code.php">
	<h1>Elecciones 2019</h1>
	
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Correo electrónico:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo electrónico">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Ingrese su contraseña">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Iniciar sesión</button>
    </div>
  </div>
</form>
</div>