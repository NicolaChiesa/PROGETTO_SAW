<?php
include('pollo.php');
unset($_SESSION['Registrated']);
session_destroy();
echo"<h1>ciao questo é il logout grazie mille </h1>";
header("refresh:2; url= Firstpage.php ");
?>