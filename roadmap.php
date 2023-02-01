<?php
$nombre_ch=30;
if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
function estConnecte (): bool {
	return !empty($_SESSION['connecte']);

}
function forcer_start(): void {
	if (!estConnecte()){
		header('Location: /challenge_start.php');
    	exit();
    }
}
?>
