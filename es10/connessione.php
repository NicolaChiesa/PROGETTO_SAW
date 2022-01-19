<?php
	$con = new mysqli('localhost', 'gruppo', 'pippo', 'saw');
	if ($con->connect_errno) {
	echo "Erore inserimanto utente: " .mysqli_connect_error($con);
	}
?>