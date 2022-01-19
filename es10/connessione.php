<?php
	$con = new mysqli('localhost', 'gruppo', 'pippo', 'saw');
	if (mysqli_connect_error($con)) {
	echo "Errore inserimento utente: " . mysqli_connect_error($con);
	}
?>