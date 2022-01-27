<?php
include('../Templates/Header.php');
if (!($_SESSION['Registrated'] == "true")){
	header("Location: NonAutenticato.php");
}
else
	echo "Benvenuto";

?>
<h1> PAGINA RISERVATA </h1>
<?php
  include('../Templates/Footer.php');
?>
