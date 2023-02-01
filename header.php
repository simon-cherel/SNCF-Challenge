<?php require 'roadmap.php'; ?> 
<!DOCTYPE html>

<html>
  
  <head style="background-image: url('top.jpg');
 background-attachment: left;">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

    <title><?php echo $title;?></title>
  </head>

  <body class="text-conter" style="background-color:#0000;">


<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">RE Contest</span>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="challenge_start.php">Challenges</a>
          </ul>
          <?php if (estConnecte()): ?>
            <span class="navbar-text">
              Défis relevés : <?php echo $_SESSION['connecte'] ?> / <?php echo $nombre_ch?>
            </span>
          <?php endif ?>
        </div>
   </div>
  </nav>
</header>
