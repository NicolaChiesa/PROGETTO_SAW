<div>
  <footer class="py-1 px-5 bg-dark position-relative" >
    <div class="row">
      <div class="col-7">
        <h5 class="text-light mt-3 mb-2">Sezioni</h5>
        <ul class="nav flex-column mb-2">
          <li class="nav-item mb-2"><a href="../Core/PaginaPrincipale.php" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="../Prodotti/prod.php" class="nav-link p-0 text-muted">Articoli</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Novità</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chi siamo</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contatti</a></li>
        </ul>
      </div>
      <?php    
      if(isset($_SESSION['Registrated']) && $_SESSION['Registrated'] == "true"){
      echo'
      <div class="col-4 offset-1 mt-3">
            <form id="myform" action="../Newsletter/IscrivitiNewsletter.php" method="POST" >
            <h5 class="text-light">Iscriviti alla nostra newsletter!</h5>
            <p class="text-light">Tutti i mesi fantastiche novità!</p>
            <div class="d-flex w-100 gap-2">
            <input type="email" id="email" class="no-outline"  name="email" placeholder="E-mail"><br>
              <label for="newsletter1" class="visually-hidden"></label>
              <input type="submit" placeholder="Iscriviti"></button>
            </div>
          </form>
      </div>
    </div>';}
    else{
        echo'           
        <form id="myform" action="../Newsletter/IscrivitiNewsletter.php" method="POST" >
            <h5 class="text-light">Iscriviti alla nostra newsletter!</h5>
            <p class="text-light">Tutti i mesi fantastiche novità!</p>
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden"></label>
              <input type="submit" placeholder="Iscriviti"></button>
            </div>
          </form>
      </div>
    </div>';
    }
  ?>
  
    <div class="d-flex justify-content-between py-1 border-top text-light">
      <p>&copy; 2021 Company, Only Mytich, tutti i diritti sono riesrvati</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="icone" href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i></a></li>
        <li class="ms-3"><a class="icone" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a></li>
        <li class="ms-3"><a class="icone" href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a></li>
      </ul>
    </div>
  </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
</body>
</html>
