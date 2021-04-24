<?php include "includes/head.php"?>
<div class="card text-black bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header"></div>
<body>
	<h1>Register</h1>
<form action="#" method="post" class="form">
	
	<p>First name</p>
	<input type="text" name="player_name">
	
	<p>Age</p><input type="text" name="player_years">
	
	<p>Email</p>
	<input type="text" name="player_email">
	
	<p>Password</p>
	<input type="password" name="player_password">
	<p></p>
	
	<input type="radio" id="male" name="player_gender" value="male">
	<label for="male">Male</label><br>
	
	<input type="radio" id="female" name="player_gender" value="female">
	<label for="female">Female</label><br>
	<p></p>
	
	<input type="submit" value="Register" href="login.php" >
</form>
</body>


<?php  include "includes/connection.php" ;
if (isset($_POST['player_name'])) {
  
 	$player_name = $_POST['player_name'];
	$player_password = $_POST['player_password'];
	$player_email = $_POST['player_email'];
  	$player_years = $_POST['player_years'];
  	$player_gender = $_POST['player_gender'];


	$sql = "INSERT INTO players (player_name, player_password, player_email, player_years, player_gender) VALUES ('$player_name', '$player_password' , '$player_email', '$player_years','$player_gender')";


	
	mysqli_query($conn, $sql);
    $conn->close();
    header( "Location: login.php" );    
}
?>
<a button class="btn btn-danger" type="button" href= index.php>Exit</button></a>
</div>
