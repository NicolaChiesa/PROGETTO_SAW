<!DOCTYPE html>
<html lang="it">
<head>
    <title>Modifica</title>
    <link rel="stylesheet" type="text/css" href="esercizio4.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="myscript.js"></script>
</head>
<body>
<?php
include('connessione.php');
session_start();
if (!isset($_SESSION['key'])){
	header("Location: esercizio4.php");
}
else
	echo "Benvenuto nella pagina di modifica ".$_SESSION['nome'];
$nome=$_SESSION['nome'];
$cognome=$_SESSION['cognome'];
$mail=$_SESSION['email'];
?>
<p><a href="esci.php">logout</a></p>
<?php
$form='<div class="mydiv"> 

<form id="myform" action="mod.php" method="POST"> 
    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="email" id="email" class="no-outline"  name="email" value='.$mail.'><br>

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" id="firstname" class="no-outline"  name="firstname" value='.$nome.'><br>

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" id="lastname" class="no-outline"  name="lastname" value='.$cognome.'><br>

	<input type="submit" value="MODIFICA">
    </form>';
    echo $form;
    mysqli_close($con);
    ?>
</div>
<p><a href="es4.php">Pagina principale</a></p>
</body>
</html>