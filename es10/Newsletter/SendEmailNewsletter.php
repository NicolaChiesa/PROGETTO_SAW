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
	
    $query = "SELECT * FROM newsletters WHERE news=1";
	$res=mysqli_query($con,$query);
    while($row = mysqli_fetch_object($res)){

        //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
        $mail->IsSMTP();                                            //Send using SMTP
        $mail->SMTPDebug =0;                                        //Enable verbose debug output
        $mail->Host       = "smtp.gmail.com";                       //Set the SMTP server to send through
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = "greenkitchenaccessories@gmail.com";    //SMTP username
        $mail->Password   = "GreenGreenRugby9";                     //SMTP password
        $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption

        //Destinatario
        $mail->setFrom('greenkitchenaccessories@gmail.com', 'Nicola');
        $mail->addCC($row->email);               //Name is optional
        $mail->addReplyTo('greenkitchenaccessories@gmail.com', 'Nicola');


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Benvenuto tra gli iscritti';
        $mail->Body    = 'Congratulazioni sei diventato uno dei nostri! non ti perderai più nessuna news 
                          riguardante la mitologia!  </b>';
        $mail->Send();

        echo '<p>Sei stato iscritto alla nostra newsletter, ti abbiamo appena inviato una mail di conferma !</p>';
        } catch (Exception $e) {
            echo "<p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
        }
    }
	header("refresh:4; url=../Core/PaginaPrincipale.php");

?>
