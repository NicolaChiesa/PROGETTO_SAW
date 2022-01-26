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
    <input type="password" class="no-outline"  id="confirm" name="confirm" placeholder="Conferma password">
    
	  <input type="submit" value="Invia">
    <br><br><br><br>
  </form>
  
</div>
</center>

<script src= "jquery-3.2.1.min.js"></script>
<script type="text/javascript">
  console.log('Parte lo scriopt');
  $(document).ready(setup);

  function setup() {
    $("#email").on("blur",controlla_doppioni_email )
  }

  function controlla_doppioni_email(){
    console.log('sono nel check email');
    if(!this.checkValidity()){
      console.log('la mail non era valida'); 
      invalida_email("Formato mail non valido");
    }
      else{
        let email_inserita = $("#email").val();
        console.log('Ho assegnato val ad email'); 
        if(email_inserita==""){
          invalida_email("Devi inserire una email");
          console.log('la email era vuota'); 
        } 
        else{
          console.log('ha visto che la email aveva il formato giusto e andiamo a chiamare la funzione che fa il controollo ')
          $.get("controlloEmail.php", {email: email_inserita}, gestisci_risposta_server);
          console.log('finito il controlloemailllll');           
        }
      }
  }

  // Ripulisce la mail e mi dice qua é stato il motivo a generare l'errore
  function invalida_email(messaggio_errore){
    console.log('ho invalidato la mail')
    $("#email").val(("")).attr("placeholder",messaggio_errore);
    $("#email").attr("class","form-control is-invalid");
  }

  function gestisci_risposta_server(risposta_server){
    console.log('Sono entrato nel gestiscirisposta')
    if(risposta_server == "non trovata")
      invalida_mail("Email giá in uso, cambiala");
    else{
      console.log('il gestisci mi ha detto che va bene ')
      $("#email").attr("class","form-control is-valid");
    }
  }
</script>

<?php
  include('../Templates/Footer.php');
?>