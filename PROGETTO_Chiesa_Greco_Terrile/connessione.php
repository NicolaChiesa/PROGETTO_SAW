<?php
	$con = new mysqli('localhost', 'gruppo', 'pippo', 'saw');
	if ($con->connect_errno) {
	echo "Erore inserimento utente: " .mysqli_connect_error($con);
	}
?>