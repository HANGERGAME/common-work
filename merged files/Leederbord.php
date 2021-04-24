<div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
  <div class="card-header"></div>
  <div class="card-body">
<h1> Leederbord </h1>
		<figure class="text-end">
  		<blockquote class="blockquote">
  	</blockquote>
  	<figcaption class="blockquote-footer">

    <strong>homepage  You can see where are you in the </strong> <cite title="Source Title">Ranking</cite>
  </figcaption>
</figure>
</head>
<body>
</div>
		<?php  include "includes/head.php" ;?>
	<?php  include "includes/connection.php" ;

	$read_query = "SELECT * FROM players JOIN leederbord ON players.player_id = leederbord.leederbord_id";
	$result = mysqli_query($conn, $read_query);?>

	<div class="d-grid gap-2">
  		<a button class="btn btn-success" type="button" href= Leederbord_easy.php>Easy</button></a>
  	 	<a button class="btn btn-primary" type="button" href= Leederbord_medium.php>Medium</button></a>
  	 	<a button class="btn btn-danger" type="button" href= Leederbord_hard.php>Hard</button></a>
  </p>
  <a button class="btn btn-danger" type="button" href= index.php>Exit</button></a>
  	
  <?php 
	$read_query = "SELECT * FROM players JOIN leederbord ON players.player_id = leederbord.leederbord_id";
	$result = mysqli_query($conn, $read_query);?>
	
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
					echo "<td></td>";
					echo "</tr>";
			}
		}?>

		<?php  include "includes/footer.php" ;?>
		