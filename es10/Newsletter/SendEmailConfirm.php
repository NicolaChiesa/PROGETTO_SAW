<?php
	include('../Templates/Header.php');
	include('../connessione.php');

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

   


    //Load Composer's autoloader
    require '../vendor/autoload.php';
	
    $query = "SELECT * FROM utenti WHERE news=1";
	$res=mysqli_query($con,$query);
    while($row = mysqli_fetch_object($res)){

        //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug =1;                                       //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Mailer = "smtp";
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'greenkitchenaccessories@gmail.com';    //SMTP username
        $mail->Password   = 'GreenGreenRugby9';                           //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('greenkitchenaccessories@gmail.com', 'Nicola');
        $mail->addAddress($row->Mail);               //Name is optional
        $mail->addReplyTo('greenkitchenaccessories@gmail.com', 'Nicola');


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Benvenuto tra gli iscritti';
        $mail->Body    = 'Congratulazioni sei diventato uno dei nostri! non ti perderai più nessuna news 
                            riguardante la mitologia!  </b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->Send();
        echo '<p>Message has been sent</p>';
        } catch (Exception $e) {
            echo "<p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
        }
    }

?>
