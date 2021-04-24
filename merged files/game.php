
<?php 
include "includes/head.php";
include 'functions.php';
?>

<a type="button" class="btn btn-outline-light" href="leederbord.php">Leederbord</a>
<a type="button" class="btn btn-outline-light" href="pregame.php">Play game</a>

<?php 
if (!isset($_SESSION)) { session_start(); }
$decodedWord = preg_split('//u', $_SESSION['word'], null, PREG_SPLIT_NO_EMPTY);//ARRAY

if (isset($_GET['letter'])) {
   lettercheck($decodedWord, $_GET['letter']);
}

?>

<div>
<img src="<?php echo $_SESSION['error'] ?>.png" height="400" weight="400">
<p><?php echo implode(" ",$_SESSION['hiddenWord']). "<p></p>ERROR: ".$_SESSION['error']; ?></p>

</div>

<div class="letter"> 
<form class="letter" action="game.php" method="get">
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
</div>
</body>


<?php
if (!in_array('_', $_SESSION['hiddenWord'])) {
  echo "Congratulations!";
  $end = hrtime(true);
  echo ($end - $_SESSION['time']) / 1000000000;
}elseif ($_SESSION['error'] > 6) {
  echo "game over";
}
?>

