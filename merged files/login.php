<?php include "includes/head.php"?>
<body>
	<h1>Login</h1>
<form action="#" method="post" class="form">
	<p>First name</p><input type="text" name="player_name">
	<p>Password</p><input type="Password" name="player_password">
	<p></p>
	<input type="submit" value="submit" >
</form>
</body>
</html>

<?php include "includes/connection.php" ;
if (isset($_POST['user_name'])) {
  
 	$userName = $_POST['player_name'];
	$userPassword = $_POST['player_password'];
	$userEmail = $_POST['player_email'];

	$sql = "INSERT INTO hanger_game (player_name, player_password, player_email) VALUES ('$player_name', '$player_password' , '$player_email')";


	mysqli_query($conn, $sql);
    $conn->close();
    header( "Location: leederbord.php" ); 

    
}
?>
