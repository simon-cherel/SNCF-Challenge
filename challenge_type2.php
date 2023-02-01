<?php 
require 'header.php' ;
$reussite=null;
$erreur=null;
$numero_suivant=$numero+1;
 
if (!empty($_POST['reponse'])){
    if (password_verify(htmlentities($_POST['reponse']),$deviner)){
        $_SESSION['connecte'] = $numero;
        header('Location: /challenge' . "$numero_suivant.php");
        exit();
    }else{
        $erreur = "Ce n'est pas la bonne réponse, réessaye ;)";
    }
}
?>


    <div align="center">
    	<img class="mb-4" src="" alt="" width="0" height="90">
    	<h1 class="h3 mb-3 fw-normal"><?php echo $enigme ?></h1>
    </div>


    <?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    <?php endif ?>

    <div class="container">
	    <form action=""  class="justify-content-center" method="post">
	    	<div class="form-group ">
	    			<input class="form-control" step="0.1" type="number" name="reponse" placeholder="Votre Réponse">
            </div>
            <div class="d-grid gap-0 col-2 mx-auto">
                <button class="btn btn-primary" type="submit">Répondre</button>
            </div>
	    </form>
	</div>



<?php require 'footer.php' ; ?>