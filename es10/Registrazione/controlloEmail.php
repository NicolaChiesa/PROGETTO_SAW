<?php
	include('../connessione.php');
   
    $comando = "select Nome from utenti where Mail ='" .$_GET["email"] . "'";
    $result = mysqli_query($con, $comando);

    if ( mysqli_num_rows($result)>0)
    {
        echo "trovata";
    }
    else{
        echo "non trovata";
    }
    mysqli_close($con);
?>