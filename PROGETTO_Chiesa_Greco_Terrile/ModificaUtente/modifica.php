<?php
include('../connessione.php');
include('../Templates/Header.php');
if (!isset($_SESSION['Registrated'])){
	header("Location: ../Core/PaginaPrincipale.php");
}
else{
    $nome=$_SESSION['nome'];
	echo '  <center>
                <h1 class="scritta">Il tuo profilo</h1>
            </center>';
    }
$nome=$_SESSION['nome'];
$cognome=$_SESSION['cognome'];
$mail=$_SESSION['email'];
?>
<?php
$form=' <center>
            <div class="DataDiv"> 
                <form id="myform" action="mod.php" method="POST"> 
                    <p> <i class="fas fa-envelope" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i> E-mail </p>
                    <input type="email" id="email" class="no-outline" placeholder="E-mail" name="email" value='.$mail.'><br>

                    <p> <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i> Nome </p>
                    <input type="text" id="firstname" class="no-outline"  placeholder="Nome" name="firstname" value='.$nome.'><br>

                    <p> <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i> Cognome </p>
                    <input type="text" id="lastname" class="no-outline"  placeholder="Cognome" name="lastname" value='.$cognome.'><br>

                    <input type="submit" value="MODIFICA">
                    <br><br><br>
                </form>
            </div>
        </center>';
    echo $form;
    mysqli_close($con);
    ?>
</div>
<?php
  include('../Templates/Footer.php');
?>