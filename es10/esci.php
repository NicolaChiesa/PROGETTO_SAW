<!DOCTYPE html>
<html lang="it">
<head>
<?php
    session_destroy();
    setcookie(session_name(),'',time() - 42000);
    header("Location: esercizio4.php");
?>
    <title>ESCI</title>
    <link rel="stylesheet" type="text/css" href="esercizio4.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="myscript.js"></script>
</head>
<body>
<p> Grazie per aver usufruito del nostro sito</p>
</body>
</html>