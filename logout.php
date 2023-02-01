<?php 
    if (session_status() === PHP_SESSION_NONE) {
    	session_start();
	}
    unset($_SESSION['connecte']);
    header('Location: /challenge_start.php');
?>