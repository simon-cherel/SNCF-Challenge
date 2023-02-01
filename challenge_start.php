<?php 
$title="Début du challenge";
require 'header.php' ;
$reste=$nombre_ch-$_SESSION['connecte']
?>


    <div align="center">
    	<img class="mb-4" src="" alt="" width="0" height="90">
    	<?php if (estConnecte()): ?>
    		<h1 class="h1 mb-3">
    			Veux-tu continuer le challenge ?
    		</h1>
    		<h3> Il te reste : <?php echo $reste . '/' . $nombre_ch?>	challenges
    		</h3>
    	<?php else: ?>
    		<h1 class="h1 mb-3">
    			Es-tu prêt à commencer le challenge ?
    		</h1>
    	<?php endif ?>
    </div>

  	<div class="d-grid gap-0 col-2 mx-auto">
        <a class="btn btn-outline-warning btn-lg" role="button" href="/start.php" >
        <?php if (estConnecte()): ?>
        	Continuer le challenge
        <?php else: ?>
        	Commencer le challenge
        <?php endif ?>	
    	</a>
    </div>



<?php require 'footer.php' ; ?>

