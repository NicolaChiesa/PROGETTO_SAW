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
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ));
        $mail->IsSMTP();                                            //Send using SMTP
        $mail->SMTPDebug =0;                                        //Enable verbose debug output
        $mail->Host       = "smtp.gmail.com";                       //Set the SMTP server to send through
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = "onlymythmyth@gmail.com";    //SMTP username
        $mail->Password   = "Celafaremo1";                     //SMTP password
        $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption

        //Destinatario
        $mail->setFrom('onlymythmyth@gmail.com', 'OnlyMyth');
        $mail->addCC($_SESSION['email']);               //Name is optional
        $mail->addReplyTo('onlymythmyth@gmail.com', 'OnlyMyth');


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Benvenuto tra gli iscritti';
        $mail->Body    = 'Congratulazioni sei diventato uno dei nostri! non ti perderai più nessuna news 
                          riguardante la mitologia!  </b>';
        $mail->Send();

        echo'
			<div class="container py-5 my-5">
				<div class="row align-items-md-stretch">
					<div class="col"></div>
						<div class="col-md-6">
							<div class="h-100 p-5 bg-light border border-3 border-success rounded-3">
								<p class="testoBase text-center">Sei stato iscritto alla nostra newsletter, ti abbiamo appena inviato una mail di conferma!</p>
							</div>
						</div>
					<div class="col">
					</div>
					</div>
				</div>
			</div>';
        } catch (Exception $e) {
            echo'
			<div class="container py-5 my-5">
				<div class="row align-items-md-stretch">
					<div class="col"></div>
						<div class="col-md-6">
							<div class="h-100 p-5 bg-light border border-3 border-danger rounded-3">
								<p class="testoBase text-center"> Attenzione: il messaggio non può essere inviato! 
                                    Riprova, l\' e-mail inserita potrebbe non essere valida!</p>
							</div>
						</div>
					<div class="col">
					</div>
					</div>
				</div>
			</div>';
        }
	header("refresh:4; url=../Core/PaginaPrincipale.php");
    include('../Templates/Footer.php');
?>
