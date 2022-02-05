<?php
    include('../Templates/Header.php');
    include('../connessione.php');
    $p = '';
    $query = mysqli("SELECT ID FROM prodotti WHERE Nome LIKE '% '% ");
    while($a = mysqli_fetch_array($query)){
        echo $a['ID'];
    }