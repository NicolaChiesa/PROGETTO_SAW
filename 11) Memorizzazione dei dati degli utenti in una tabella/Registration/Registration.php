<?php
include('../Templates/pollo.php');
function test_input($data) {
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data;
    }

    $email = test_input($_POST["email"]);
    $pass = test_input($_POST["pass"]);
    $confirmP = test_input($_POST["confirmP"]);
    $patternEmail = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";
    $error = false;
    
// --------------------- CONTROLLO ERRORI -----------------------------
    if( empty($email)||
        empty($pass)||
        empty($confirmP)||
        $pass != $confirmP||
        !(preg_match ($patternEmail, $email))){

        $error = true;
        
        echo"<div class=\"ErrorDiv\">";
        if(empty($email)){
            echo  "<p class=\"errorTesto\"> Attention! You have to fill your email </p>";
        }
        if((preg_match ($patternEmail, $email) == 0 ) && !empty($email)){
            echo"<p class=\"errorTesto\"> Attention your email address is invalid </p>";
        }
        if(empty($pass)){
            echo  "<p class=\"errorTesto\"> Attention! You have to fill your password </p>";
        }
        if(empty($confirmP)){
            echo "<p class=\"errorTesto\"> Attention! You have to confirm your password </p>";
        }
        if($pass != $confirmP){
            echo "<p class=\"errorTesto\"> Attention! The two passwords do not match</p>";
        }
        header("refresh:3; url= FormRegistration.php ");
    }

// --------------SCRITTURA SU FLIE SE NON HO AVUTO ERRORI -------------
    if($error == false){
    
    $passC = password_hash($pass, PASSWORD_BCRYPT);
    
    $con = mysqli_connect('localhost','UtenteProva','Prova','utenti');
    if (mysqli_connect_errno()) {
        echo "Database connection failed.";
    }
    $email_escape = mysqli_real_escape_string($con, $email);
    $query="INSERT INTO utenti (Email, Password)
            VALUES ('$email_escape', '$passC')";
    $result = mysqli_query($con, $query);

    echo"<div class=\"confirmDiv\"> <p> <b> you have been Registred, congratulation <b></p> </div>"; 
    //$row_cnt = mysqli_num_rows($res);
    $affected_rows = mysqli_affected_rows($con);
    echo"<div class=\"confirmDiv\"> <p> <b> Number of new utent are $affected_rows <b></p> </div>"; 
}
?>
</body>
</html>