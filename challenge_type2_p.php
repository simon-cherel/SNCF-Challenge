<?php 
require 'header.php' ;
$reussite=null;
$erreur=null;
$numero_suivant=$numero+1;
if (!empty($_POST['reponse'])){
    if (!password_verify(htmlentities($_POST['reponse']),$deviner)){
        $erreur = "Ce n'est pas la bonne réponse, réessaye ;)";
    }
}
if (!empty($_POST['continuer'])){
        $_SESSION['connecte'] = $numero;
        header('Location: /challenge' . "$numero_suivant.php");
        exit();
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

    <?php if (empty($_POST['reponse']) OR !password_verify(htmlentities($_POST['reponse']),$deviner)): ?>
    <div class="container">
        <form action="" class="justify-content-center" method="post">
            <div class="form-group ">
                    <input class="form-control" type="number" name="reponse" placeholder="Votre Réponse">
            </div>
            <div class="d-grid gap-0 col-2 mx-auto">
                <button class="btn btn-primary" type="submit">Répondre</button>
            </div>
        </form>
    </div>
    <?php endif ?>

    <?php if (!empty($_POST['reponse']) AND (password_verify(htmlentities($_POST['reponse']),$deviner))): ?>
        <div class="container">
            <dir class="text-center">
                <div class="form-group ">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Bien joué, clique sur moi pour continuer ;)
                    </button>
                </div>
            </dir>
        </div>
    <?php endif ?>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jackpot :</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo $popup ?>
      </div>
      <div class="modal-footer">
        <form action="" class="justify-content-center" method="post">
            <input type="hidden" name="continuer" value="1">
            <button type="submit" class="btn btn-primary">Continuer</button>
        </form>
      </div>
    </div>
  </div>
</div>



<?php require 'footer.php' ; ?>