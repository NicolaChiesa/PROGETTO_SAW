<?php
include('../Templates/pollo.php');
/* ---------- pulizia dati, definizione pattern -------------- */
function test_input($data) {
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data;
    }
function test_input_pass($data){
    $data = trim($data);
    return $data;
}

    $email = test_input($_POST["email"]);
    $pass = test_input($_POST["pass"]);
    $patternEmail = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";
    $error = false;
    $login = false;

    /* ------------- messaggi di errore se necessari ---------- */
    if(empty($email)||
        empty($pass)||
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
    }

    /* ---------- controllo se utente già registrato ------------*/
    if($error == false){
        if(file_exists('../Templates/Users.txt')){
            $file = fopen("../Templates/Users.txt", "r");
            if ($file) {
                while (($line = fgets($file)) !== false) {
                    $word_arr = explode(" ", $line); //return word array
                    $emailform = test_input($word_arr[0]); // select the email address
                    $passform = test_input_pass($word_arr[1]); //select the password
                    if($email == $emailform && password_verify($pass, $passform))
                       $login = true;
                }
                fclose($file);
                if($login == true){
                    
                    echo"<div class=\"confirmDiv\"> <p> <b> You have been confirmed, congratulation! <b></p> </div>"; 
                    header("refresh:2; url= ../Templates/FirstPage.php");
                    // inizializzo a caso una variabile di sessione per conferma del login 
                    $_SESSION["Registrated"] = "True";
                    //echo $_SESSION["Registrated"];
                } else{
                    echo"<div class=\"ErrorDiv\"> <p class = \"errorTesto\"> <b> Your data aren't correct, 
                    try again <b></p> </div>"; 
                    header("refresh:2; url= FormLogin.php ");
                }
            } else{
            // error while opening file.
            echo "error while opening the file ";
            }
        }
    }  
?>  
</body>
</html>