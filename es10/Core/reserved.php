<?php
include('../Templates/Header.php');
session_start();
if (!($_SESSION['Registrated'] == "true")){
	header("Location: PaginaPrincipale.php");
}
else
	echo "Benvenuto";

?>
<h1> PAGINA RISERVATA </h1>
<?php
  include('../Templates/Footer.php');
?>
