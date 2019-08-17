<?php
require_once('connection.php');
$mesa = $municipio = $departamento = $eleccion = $recibidas = $vamos = $une = $validos = $nulos = $blancos = $emitidos = $invalidos = $impugnados;

$mesa = $_POST['mesa'];
$municipio = $_POST['municipio'];
$departamento = $_POST['departamento'];
$eleccion = $_POST['eleccion'];
$recibidas = $_POST['recibidas'];
$vamos = $_POST['vamos'];
$une = $_POST['une'];
$validos = $_POST['validos'];
$nulos = $_POST['nulos'];
$blancos = $_POST['blancos'];
$emitidos = $_POST['emitidos'];
$invalidos = $_POST['invalidos'];
$impugnados = $_POST['impugnados'];


$sql = "INSERT INTO ep2019 (Mesa,Municipio,Departamento,Eleccion,Recibidas,Vamos,Une,Validos,Nulos,Blancos,Emitidos,Invalidos,Impugnados) VALUES ('$mesa','$municipio','$departamento','$eleccion','$recibidas','$vamos','$une','$validos','$nulos','$blancos','$emitidos','$invalidos','$impugnados')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: welcome.php");
}
else
{
	echo "Error :".$sql;
}
?>