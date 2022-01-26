<?php
	include('../connessione.php');

   /* $comando = "select Nome from utenti where Mail ='" .$_GET["email"] . "'";
    $result = mysqli_query($con, $comando);

    if ( mysqli_num_rows($result)>0)
    {
        echo "trovata";
    }
    else{
        echo "non trovata";
    }
    */


    $("#emailutente").keyup(function() {
  var dati = $('#emailutente').attr('value');
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
});
    mysqli_close($con);
?>