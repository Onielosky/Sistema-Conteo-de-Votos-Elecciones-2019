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
<div id="account">
<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="https://pbs.twimg.com/profile_images/891896156342677504/gn2uyN_N_400x400.jpg">
            <!-- https://pbs.twimg.com/profile_images/891896156342677504/gn2uyN_N_400x400.jpg -->
        </div>
        <div class="useravatar">
            <img alt="" src="img/user.svg">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $fname." ".$lname; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Administrador</div>
            </button>
        </div>
        
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <table class="table">
          	<tr>
          		<td><b>Nombre:</b></td>
          		<td><?php echo $fname; ?></td>
          	</tr>
          	<tr>
          		<td><b>Apellido:</b></td>
          		<td><?php echo $lname; ?></td>
          	</tr>
          	<tr>
          		<td><b>Género:</b></td>
          		<td><?php echo $gender; ?></td>
          	</tr>
          	<tr>
          		<td><b>Correo electrónico:</b></td>
          		<td><?php echo $email; ?></td>
          	</tr>
          </table>
        </div>
        
      </div>
    </div>
    
    </div>
    </div>    
