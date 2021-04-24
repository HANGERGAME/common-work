<?php

if (!isset($_SESSION)) { session_start(); }

function letterCheck(array $word, string $letter){
 	$error = 'da';
	for ($i=0; $i < count($word) ; $i++) { 
	   if ($word[$i] === $letter) {
	      $error = "ne";
	      $_SESSION['hiddenWord'][$i] = $word[$i];
	      } 
	   } 
	if($error === 'da'){
		$_SESSION['error']++;
	}
}
