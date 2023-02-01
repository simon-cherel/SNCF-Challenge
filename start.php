<?php 
    require 'roadmap.php';
    if (session_status() === PHP_SESSION_NONE) {
    	session_start();
	}
	if (!estConnecte()) {
		$numero=0;
		$_SESSION['connecte']=$numero;
	}
	$numero_suivant=$_SESSION['connecte']+1;
	
	header('Location: /challenge' . "$numero_suivant.php");
  	exit();
?>