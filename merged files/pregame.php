<?php include ('database/db.php');?>
<?php include ('header.php');?>

	<h3 class="btn-danger"> PREGAME </h3>

	<?php
	$game_genre = "SELECT game_genre_id, game_genre_name FROM game_genres";
	$result = mysqli_query( $connection, $game_genre );?>

	<div class="form-group">
		<select class="form-control" name="recipe_category_id">
			<option value="" selected="selected" disabled="">Please Chose Genre</option>

			<?php
			if( mysqli_num_rows( $result ) > 0 ){
				while( $row = mysqli_fetch_assoc( $result ) ){
					echo "<option value=".$row['game_genre_id']." >".$row['game_genre_name']."</option>";
				}

			} else {
				die('Query failed!' . mysqli_error($conn));
			}
			?>
		</select>

			<?php
	$game_levels = "SELECT game_level_id, game_level_choice FROM game_levels";
	$result = mysqli_query( $connection, $game_levels );?>

	<div class="form-group">
		<select class="form-control" name="recipe_category_id">
			<option value="" selected="selected" disabled="">Please Chose Level</option>

			<?php
			if( mysqli_num_rows( $result ) > 0 ){
				while( $row = mysqli_fetch_assoc( $result ) ){
					echo "<option value=".$row['game_level_id']." >".$row['game_level_choice']."</option>";
				}

			} else {
				die('Query failed!' . mysqli_error($conn));
			}
			?>

		
		</select>
		<?php include ('footer.php');?>

		<p>
	<div class="d-grid gap-2">
  		<a button class="btn btn-primary" type="button" href= game.php>Play</button></a>
  	 	<a button class="btn btn-danger" type="button" href= index.php>Back</button></a>
  		</p>	
	?>
<?php
session_start();
$_SESSION['game_level_choice']='medium';
$_SESSION['game_genre_name'] = 'sports';
$_SESSION['word'] = 'голф';
$_SESSION['time_start'] = date('H:i:s');
$_SESSION['error'] = 0;
$_SESSION['hiddenWord']=[];
for ($i=0; $i < mb_strlen($_SESSION['word']); $i++) { 
	$_SESSION['hiddenWord'][$i] = '_';
} ?>

<a button class="btn btn-danger" type="button" href="index.php">Exit</button></a>