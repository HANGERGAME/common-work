<?php include "includes/head.php";?>
<?php include "includes/connection.php" ;?>

<a button class="btn btn-danger" type="button" href= index.php>Exit</button></a>

<?php
// check
if (!empty($_POST['player_name'])) {
	
	$userName = $_POST['player_name'];
	$userPassword = $_POST['player_password'];


	//READ
	$read_query = "SELECT * FROM `players` WHERE `player_name` = '$userName' AND `player_password` = '$userPassword'";

	$result = mysqli_query($conn, $read_query);

	if (mysqli_num_rows($result) > 0) {
		$player = mysqli_fetch_assoc($result);
		session_start();
		$_SESSION['player_id'] = $player['player_id'];
		$_SESSION['player_name'] = $player['player_name'];
		header('Location:pregame.php');

		
	}else{
		echo "<p>INCCORECT username/password!</p>";

	}
}
?>

<div class="card text-white bg-primary mb-2" style="max-width: 55rem;">
  <div class="card-header"></div>
  <div class="card-body">

<body>
	<h1 class="text-light">Login</h1>
<form action="#" method="post" class="form">
	<p class="text-light">First name....</p><input type="text" name="player_name">
	<p class="text-light">Password....</p><input type="Password" name="player_password">
	<p></p>
	<input button class="btn btn-info" type="submit" value="submit" >
	</p>
	
</form>
</div>
</body>
</html>



	
	