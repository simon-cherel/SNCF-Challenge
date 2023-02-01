<footer class="page-footer fixed-bottom mt-auto py-3 bg-light">
  <div class="container-fluid text-center">
    <?php if (estConnecte()): ?>
        <div class="d-grid gap-0 col-2 mx-auto">
        	<a class="btn btn-danger btn-sm" role="button" href="/logout.php" >
        		Réinitialiser le challenge
        	</a>
        </div>
    <?php else: ?>
       <span class="text-muted">Say my name Hunters !!!</span>
    <?php endif ?>	

  </div>
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://recontest.hunters2021.fr/"> Hunters2021.fr</a>
  </div>
</footer>
    
    
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>

</html>