<?php
	include('../connessione.php');
    console.log('Siamo nel controllo veroooo');
    echo "va tutto ok ";

    $comando = "select Nome from utenti where Mail ='" .$_POST["email"] . "'";
    $result = mysql_query($conn, $comando);

    if ( mysqli_num_rows($result)>0)
    {
        echo "trovata";
    }
    else{
        echo "non trovata";
    }

    mysqli_close($conn);
?>