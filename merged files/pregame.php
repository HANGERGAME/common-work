<div class="card text-white bg-primary mb-1" style="max-width: 55rem;">
  <div class="card-header"></div>
  <div class="card-body">
<?php
 session_start(); 

 $_SESSION['word'] = 'монитор'; 
 //$_SESSION['time_start'] = date('H:i:s'); 
 $_SESSION['error'] = 0; 
 $_SESSION['hiddenWord']=[]; 
 //$_SESSION['time'] = hrtime(true);
 for ($i=0; $i < mb_strlen($_SESSION['word']); $i++) { 
 $_SESSION['hiddenWord'][$i] = '_'; 
 } 

?>
</div>

<?php  include "includes/head.php" ;?>
<?php  include "includes/connection.php" ;?>
<?php  include "includes/loginCheck.php" ;?>

	<div class="card text-white bg-primary mb-6" style="max-width: 55rem;">
  <div class="card-header">
	<h3> PREGAME </h3></div>
<form  action="word_select.php" method="post">
	<?php
		$game_genre = "SELECT game_genre_id, game_genre_name FROM game_genres";
		$result = mysqli_query( $conn, $game_genre );?>
			
			<div class="btn-group">
				<select class="form-control" name="game_genre">
					

			<?php
			if( mysqli_num_rows( $result ) > 0 ){
				while( $row = mysqli_fetch_assoc( $result ) ){
					echo "<option value=".$row['game_genre_id']." >".$row['game_genre_name']."</option>";
				}
			} 
			else {
				die('Query failed!' . mysqli_error($conn));
			}
			?>
			</select>
	
	<?php
		$game_levels = "SELECT game_level_id, game_level_choice FROM game_levels";
		$result = mysqli_query( $conn, $game_levels );?>

		<div class="form-group">
			<select class="form-control" name="game_level"><p>plase choose level</p>
			</div>
			
	<?php
		if( mysqli_num_rows( $result ) > 0 ){
		 while( $row = mysqli_fetch_assoc( $result ) ){
			echo "<option value=".$row['game_level_id']." >".$row['game_level_choice']."</option>";
				
			}

			}
			else {
				die('Query failed!' . mysqli_error($conn));
			}
			?>
		</select>
		<p>
		<input type="submit" value="play" href="game.php">
	</form>

  		<a type="button" class="btn btn-outline-danger" href="index.php">Back</a>
	
<?php

if (isset($_POST['submit'])) {
	$_SESSION['time'] = hrtime(true);
	$start = hrtime(true);
}




