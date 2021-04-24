
 <?php mb_internal_encoding("UTF-8"); ?>
<?php  include "includes/connection.php" ;

$sql = "SELECT * FROM `words` WHERE `game_level_id` = 2 AND `game_genre_id` = 2";  
$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$i = 0;
		while($row = mysqli_fetch_assoc($result)){
			$i ++;
			
			//var_dump($row);
			echo "<br>";
			$words[$i] = $row['word_name'];
		}

		//session_start();
	$random_id = rand(0, $i);
	$selectedWord = $words[$random_id];
}
?>