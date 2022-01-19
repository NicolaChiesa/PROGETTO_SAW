<?php
	$con = new mysqli('localhost', '', '', 'saw');
	if (mysqli_connect_errno($con)) {
	echo "Erore inserimento utente: " . mysqli_connect_error($con);
	}
?>