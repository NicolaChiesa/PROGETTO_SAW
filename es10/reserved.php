<!DOCTYPE html>
<html lang="it">
<head>
    <title>Sign-up</title>
</head>

<body>
<?php
session_start();
if (!isset($_SESSION['key'])){
	header("Location: esercizio4.php");
}
else
	echo "Benvenuto";

?>
<h1> PAGINA RISERVATA </h1>
</body>
</html>
