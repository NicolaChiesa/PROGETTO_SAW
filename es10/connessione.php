<?php
	$con = new mysqli('localhost', 'gruppo', 'pippo', 'saw');
	if (mysqli_connect_errno($con)) {
	echo "Erore inserimento utente: " . mysqli_connect_error($con);
	}
?>