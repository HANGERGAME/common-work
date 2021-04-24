	<div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
  <div class="card-header"></div>
  <div class="card-body">
	<h1> Leederbord </h1>
	<figure class="text-end">
  <blockquote class="blockquote">
  </blockquote>
  <figcaption class="blockquote-footer">
    Level <cite title="Source Title">Medium</cite>
  </figcaption>
</figure>
</head>
<body>
</div>
	<a button class="btn btn-primary" type="button" href= Leederbord.php>Back</button></a>
	
	<?php  include "includes/head.php" ;?>
	<?php  include "includes/connection.php" ; 
	$read_query = "SELECT * FROM players JOIN leederbord ON players.player_id = leederbord.leederbord_id WHERE leederbord.game_level_id = 2";
	$result = mysqli_query($conn, $read_query);?>

	<a button class="btn btn-danger" type="button" href= index.php>Exit</button></a>

		<?php
			if(mysqli_num_rows($result) > 0){

			echo "<table class='table table-dark table-striped'>";
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
  	 	<a button class="btn btn-danger" type="button" href= index.php>Exit</button></a>
  </p>
	<?php  include "includes/footer.php" ;?>
