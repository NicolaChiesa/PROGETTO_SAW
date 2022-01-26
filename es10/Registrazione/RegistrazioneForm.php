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
    <small class="error_email" style="color:red;"></small>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="no-outline" id="pass" name="pass" placeholder="Password"><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="no-outline"  id="confirm" name="confirm" placeholder="Conferma password">
    
	  <input type="submit" value="Invia" id="submit">
    <br><br><br><br>
  </form>
</div>
</center>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
 
/*parte Michele indiano che non si sa perchè non va

$(document).ready(function(){
    $('#email').keyup(funciotn(e){
        var email=$('#email').val();
        $.ajax({
        type:"POST",
        url:"registration.php",
        data:{"submit":1
        "email":email,
        },

        dataType:"",
        success:function(response){
            $(".error_email").text(response);
            }
        });
    });
});
*/

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
    console.log(risposta_server)
    if(risposta_server == "trovata")
      invalida_email("Email giá in uso, cambiala");
    else{
      console.log('il gestisci mi ha detto che va bene ')
      $("#email").attr("class","form-control is-valid");
    }
  }

  /*$("#email").keyup(function() {
  var dati = $('#email').attr('value');
  var data_send = "username=" + dati;

  $.ajax({
    type: "POST",
    url: "newsletter_iscrizione.php",
    data: data_send,
    success: function(data) {
      if (data == '1') {
        $(".mail").css("border","2px solid red");
        $('#campo').html('Email Esistente');
        $("#campo").css("color","red");
        $('#submit').attr('disabled', true);
      }
      else {
        $('#submit').attr('disabled', false);
      }
    }
  });
});*/
</script>

<?php
  include('../Templates/Footer.php');
?>