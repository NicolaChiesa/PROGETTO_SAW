
<?php
include('../Templates/Header.php');
if (!($_SESSION['Registrated'] == "true")){
	header("Location: NonAutenticato.php");
}
else{
	echo"
	<center>
	 <div class=\"DataDiv\">
	  <p class=\"testoMessage\"> 
	  		Benvenuto nella pagina riservata, stiamo ancora lavorando <br> 
			per far si che qui tu possa trovare un contenuto su misura per  <br>
			te, iscriviti alla newsletter per veniure subito informato per quando sará pronta!! <br></p>
	 </div>
	</center>";
}

  include('../Templates/Footer.php');
?>
