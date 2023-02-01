<?php 
require 'header.php' ;
$reussite=null;
$erreur=null;
$numero_suivant=$numero+1;

if (!empty($_POST['reponse1']) OR !empty($_POST['reponse2']) OR !empty($_POST['reponse3'])){
	if (empty($_POST['reponse1'])){
	$_POST['reponse1']='off';
}
if (empty($_POST['reponse2'])){
	$_POST['reponse2']='off';
}
if (empty($_POST['reponse3'])){
	$_POST['reponse3']='off';
}
    if (password_verify($_POST['reponse1'] . $_POST['reponse2'] . $_POST['reponse3'],$deviner)){
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
    	<form action="" class="justify-content-center" method="post">
	    	<div class="form-group ">
	    			<input type="checkbox" class="form-check-input" name="reponse1">
	  				<label> <?php echo $proposition[0] ?> </label><br>
	  				<input type="checkbox" class="form-check-input" name="reponse2">
					<label> <?php echo $proposition[1] ?> </label><br>
					<input type="checkbox" class="form-check-input" name="reponse3">
					<label> <?php echo $proposition[2] ?> </label><br><br>
	    	</div>
            <div class="d-grid gap-0 col-2 mx-auto">
                <button class="btn btn-primary" type="submit">Répondre</button>
            </div>
	    </form>
	</div>




<?php require 'footer.php' ; ?>