<?php
	$con = new mysqli('localhost', 'MIkig', 'Ninhothebest4', 'saw');
	if (mysqli_connect_errno($con)) {
	echo "Erore inserimanto utente: " . mysqli_connect_error($con);
	}
?>