<?php
    include('../Templates/Header.php');
	  include('../connessione.php');
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
    <input type="password" class="no-outline"  id="confirm" name="confirm" placeholder="Conferma password"><br>

    <input type="checkbox" id="Subscription" name="Subscription" value="si">
    <label for="Subscription"> Iscrivimi alla newsletter</label><br><br>

    
	  <input type="submit" value="Invia" id="submit">
    <br><br><br>
  </form>
</div>
</center>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(setup);
  function setup() {
    $("#email").on("blur",controlla_doppioni_email )
  }

  function controlla_doppioni_email(){
    if(!this.checkValidity()){
      invalida_email("Formato mail non valido");
    }
      else{
        let email_inserita = $("#email").val();
        if(email_inserita==""){
          invalida_email("Devi inserire una email");
        } 
        else{
          $.get("controlloEmail.php", {email: email_inserita}, gestisci_risposta_server);
        }
      }
  }

  // Ripulisce la mail e mi dice qual é stato il motivo a generare l'errore
  function invalida_email(messaggio_errore){
    $("#email").val(("")).attr("placeholder",messaggio_errore);
    $("#email").attr("class","form-control is-invalid");
  }

  function gestisci_risposta_server(risposta_server){
    if(risposta_server == "trovata")
      invalida_email("Email giá in uso, cambiala");
    else{
      $("#email").attr("class","form-control is-valid");
    }
  }


</script>

<?php
  include('../Templates/Footer.php');
?>