
<?php include "includes/head.php";?>

<?php
	if (isset($_SESSION['player_name'])) {

    echo'User: '.  $_SESSION['player_name'];
  }
  else{
  header( "Location: index.php" ); 
      exit;
  }
	?>
	<a  type="button" href="index.php" class="btn btn-primary">Logout</a>
  <a  class="btn btn-light" href="profile.php" >profile</a>