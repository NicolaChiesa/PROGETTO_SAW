<div>
    <footer class="py-5 px-5 bg-dark position-relative" >
      <div class="row">
        <div class="col-7">
          <h5 class="text-light">Sezioni</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Articoli</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Novità</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chi siamo</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contatti</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          </ul>
        </div>
  
        <div class="col-4 offset-1">
        <?php   
        if(isset($_SESSION['Registrated']) && $_SESSION['Registrated'] == "true"){
            echo'<form id="myform">
            <h5 class="text-light">Iscriviti alla nostra newsletter!</h5>
            <p class="text-light">Tutti i mesi fantastiche novità!</p>
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Indirizzo e-mail</label>
              <a href="../Newsletter/newsletter.php" <button type="button" class="btn btn-primary">Iscriviti</button> </a>
            </div>
          </form>
        </div>';
        }

    ?> 
      </div>
  
      <div class="d-flex justify-content-between py-4 my-4 border-top text-light">
        <p>&copy; 2021 Company, Only Mytich, tutti i diritti sono riesrvati</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-light" href="#"><i class="bi bi-twitter"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
</body>
</html>
