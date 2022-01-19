<?php
	$con = new mysqli('localhost', 'gruppo', 'pippo', 'saw');
<<<<<<< HEAD
	if ($con->connect_errno) {
	echo "Erore inserimanto utente: " .mysqli_connect_error($con);
=======
	if (mysqli_connect_errno($con)) {
	echo "Errore inserimento utente: " . mysqli_connect_error($con);
>>>>>>> 6ad3b3d2960891e9c6eff2a5ac2643eb5826b79f
	}
?>