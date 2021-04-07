<?php
include ('header.php');
?>

<h1> Leederbord </h1>
		<figure class="text-end">
  		<blockquote class="blockquote">
  	</blockquote>
  	<figcaption class="blockquote-footer">
    homepage  You can see where are you in the <cite title="Source Title">Ranking</cite>
  </figcaption>
</figure>
</head>
<body>
	<?php include ('database/db.php'); 
	$read_query = "SELECT * FROM players JOIN leederbord ON players.player_id = leederbord.leederbord_id";
	$result = mysqli_query($connection, $read_query);?>

	<div class="d-grid gap-2">
  		<a button class="btn btn-primary" type="button" href= Leederbord_easy.php>Easy</button></a>
  	 	<a button class="btn btn-danger" type="button" href= Leederbord_medium.php>Medium</button></a>
  	 	<a button class="btn btn-primary" type="button" href= Leederbord_hard.php>Hard</button></a>
  </p>
	<?php include ('database/db.php'); 
	$read_query = "SELECT * FROM players JOIN leederbord ON players.player_id = leederbord.leederbord_id";
	$result = mysqli_query($connection, $read_query);?>
	
		<?php
			if(mysqli_num_rows($result) > 0){

			echo "<table class='table table-bordered'>";
				echo "<thead>";
					echo "<tr>";
						echo "<th>id</th>";
						echo "<th>name</th>";
						echo "<th>email</th>";
						echo "<th>time</th>";
						echo "<th>game level</th>";					
					echo "</tr>";
				echo "</thead>";
			echo "<tbody>";

			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
					echo "<td>".$row['player_id']."</td>";
					echo "<td>".$row['player_name']."</td>";
					echo "<td>".$row['player_email']."</td>";
					echo "<td>".$row['time']."</td>";
					echo "<td>".$row['game_level_id']."</td>";
					echo "<td>
						</td>";
					echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
		}
		else{
			echo "Няма намерени резултати!";
		}
	?>
<p>
	<div class="d-grid gap-2">
  		<a button class="btn btn-primary" type="button" href= pregame.php>Play again</button></a>
  	 	<a button class="btn btn-danger" type="button" href="index.php">Exit</button></a>
  </p>

<?php
include ('footer.php');
?>