<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
	}
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Página de Inicio</title>
<div class="jumbotron">
	<center>
		<h1>Sistema Conteo de Votos</h1>
		<h1>Segunda Elección Presidencial 2019</h1>
		<h1>Bienvenido</h1>
		<h1> <?php echo $fname." ".$lname; ?></h1>
	</center>
</div>