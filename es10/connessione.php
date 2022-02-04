<?php
	$con = new mysqli('localhost', 'S4825218', 'Celafaremo1', 'S4825218');
	if ($con->connect_errno) {
	echo "Erore inserimento utente: " .mysqli_connect_error($con);
	}
?>