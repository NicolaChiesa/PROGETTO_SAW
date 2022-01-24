<?php
    include('../Templates/Header.php');
?>

<center>
<div class="DataDiv"> 
  <legend class="testoTitolo">Inserisci i tuoi dati</legend><br>
    <form id="myform" action="registration.php" method="POST"> 

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" class="no-outline" id="firstname" name="firstname" placeholder="Nome"><br>

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" class="no-outline" id="lastname" name="lastname" placeholder="Cognome"><br>

    <i class="fa fa-envelope" style="font-size:9px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="email" id="email" class="no-outline"  name="email" placeholder="E-mail"><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="no-outline" id="pass" name="pass" placeholder="Password"><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="no-outline"  id="confirm" name="confirm" placeholder="Conferma password">
    
	  <input type="submit" value="Invia">
    <br><br><br><br>
  </form>
  
</div>
</center>

<?php
  include('../Templates/Footer.php');
?>