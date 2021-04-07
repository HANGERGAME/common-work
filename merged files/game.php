<?php include "includes/head.php";?>

<body class="secondbackground">
<h1>Hang Game</h1>
<p class="font-weight-bold">Suggest a word:</p>
<div>
<img src="image.png" height="400" weight="400">
</div>



<?php 
$hiddenWord=[];
$decodedWord = preg_split('//u', $_SESSION['word'], null, PREG_SPLIT_NO_EMPTY);//ARRAY



session_start();
 
if (isset($_GET['letter'])) {

   $word = $_SESSION['word'];
  
   $position = mb_strpos($word, $_GET['letter']);

   var_dump($position);


   if ($position === false) {
      echo "ERROR";
      $_SESSION['error']++;
   }else{
      $_SESSION['hiddenWord'][$position] = $decodedWord[$position];
   }
}

var_dump($_SESSION['hiddenWord']);


echo '<p>'.implode(" ",$_SESSION['hiddenWord']).'</p>';

?>

<div>
<form action="game.php" method="get">
  <input type="submit"  name="letter" value="а" class="btn btn-light" class="letter">
  <input type="submit"  name="letter" value="б" class="btn btn-light">
   <input type="submit" name="letter" value="в" class="btn btn-light">
   <input type="submit" name="letter" value="г" class="btn btn-light">
   <input type="submit" name="letter" value="д" class="btn btn-light">
   <input type="submit" name="letter" value="е" class="btn btn-light">
   <input type="submit" name="letter" value="ж" class="btn btn-light">
   <input type="submit" name="letter" value="з" class="btn btn-light">
   <input type="submit" name="letter" value="и" class="btn btn-light">
   <input type="submit" name="letter" value="й" class="btn btn-light">
   <input type="submit" name="letter" value="к" class="btn btn-light">
   <input type="submit" name="letter" value="л" class="btn btn-light">
   <input type="submit" name="letter" value="м" class="btn btn-light">
   <input type="submit" name="letter" value="н" class="btn btn-light">
   <input type="submit" name="letter" value="о" class="btn btn-light">
   <p></p>
   <input type="submit" name="letter" value="п" class="btn btn-light">
   <input type="submit" name="letter" value="р" class="btn btn-light">
   <input type="submit" name="letter" value="с" class="btn btn-light">
   <input type="submit" name="letter" value="т" class="btn btn-light">
   <input type="submit" name="letter" value="у" class="btn btn-light">
   <input type="submit" name="letter" value="ф" class="btn btn-light">
   <input type="submit" name="letter" value="х" class="btn btn-light">
   <input type="submit" name="letter" value="ц" class="btn btn-light">
   <input type="submit" name="letter" value="ч" class="btn btn-light">
   <input type="submit" name="letter" value="ш" class="btn btn-light">
   <input type="submit" name="letter" value="щ" class="btn btn-light">
   <input type="submit" name="letter" value="ъ" class="btn btn-light">
   <input type="submit" name="letter" value="ь" class="btn btn-light">
   <input type="submit" name="letter" value="ю" class="btn btn-light">
   <p></p>
   <input type="submit" name="letter" value="я" class="btn btn-light">
</form> 
<a button class="btn btn-danger" type="button" href="index.php">Exit</button></a>
</div>
</body>
	