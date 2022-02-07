<?php
  include('../Templates/Header.php');
?>

<div class="container py-5">
  <h1 class="titolo">
      Ecco l'elenco di tutti i nostri articoli
  </h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card border-dark h-100">
        <img src="../Immagini/durlindana.jpg" class="card-img-top immagini" alt="Durlindana">
        <div class="card-body">
          <h5 class="card-title titoloCard">Durlindana</h5>
          <p class="card-text testoCard">Una delle spade più ricercate nella storia dell'umanità!</p>
          <a href="./durlindana.php" class="btn btn-outline-light">Scopri...</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-dark h-100">
        <img src="../Immagini/mjolnir.png" class="card-img-top immagini" alt="Mjolnir">
        <div class="card-body">
          <h5 class="card-title titoloCard">Mjolnir</h5>
          <p class="card-text testoCard">Sarai degno di sollevare il martello del dio del tuono?</p>
          <a href="./mjolnir.php" class="btn btn-outline-light">Scopri...</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-dark h-100">
        <img src="../Immagini/excalibur.png" class="card-img-top immagini" alt="Excalibur">
        <div class="card-body">
          <h5 class="card-title titoloCard">Excalibur</h5>
          <p class="card-text testoCard">Riuscirai a estrarre la spada e a governare sull'Inghilterra?</p>
          <a href="./excalibur.php" class="btn btn-outline-light">Scopri...</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-dark h-100">
        <img src="../Immagini/olifante.jpg" class="card-img-top immagini" alt="Olifante">
        <div class="card-body">
          <h5 class="card-title titoloCard">Olifante</h5>
          <p class="card-text testoCard">Il leggendario corno di cui narra la Chanson de Roland.</p>
          <a href="./olifante.php" class="btn btn-outline-light">Scopri...</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-dark h-100">
        <img src="../Immagini/pomo.jpg" class="card-img-top immagini" alt="Pomo della discordia">
        <div class="card-body">
          <h5 class="card-title titoloCard">Pomo d'oro</h5>
          <p class="card-text testoCard">Non un gioco di parole, ma quello della discordia!</p>
          <a href="./pomo.php" class="btn btn-outline-light">Scopri...</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-dark h-100">
        <img src="../Immagini/RuyiJinguBang3.jpg" class="card-img-top immagini" alt="RuyiJinguBang">
        <div class="card-body">
          <h5 class="card-title titoloCard">RuyiJinguBang</h5>
          <p class="card-text testoCard">Il leggendario bastone magico brandito dalla scimmia immortale Sun Wukong</p>
          <a href="./ruyijingubang.php" class="btn btn-outline-light">Scopri...</a>
        </div>
      </div>
    </div>
  </div>
  <p class="scritta">
    Presto arriveranno nuovi fantastici articoli... <br>
    Iscriviti alla nostra newsletter per non perderti nessuna novità!
  </p>
</div>

<?php
  include('../Templates/Footer.php');
?>
