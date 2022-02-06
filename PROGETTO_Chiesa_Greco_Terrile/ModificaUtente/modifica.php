<?php
include('../connessione.php');
include('../Templates/Header.php');
if (!isset($_SESSION['Registrated'])){
	header("Location: ../Core/PaginaPrincipale.php");
}
else{
    $nome=$_SESSION['nome'];
	echo '<h1 class="scritta">Il tuo profilo</h1>';
    }
$nome=$_SESSION['nome'];
$cognome=$_SESSION['cognome'];
$mail=$_SESSION['email'];
?>
<?php
$form=' 
        <div class="container position-center">
            <div class="DataDiv"> 
                <form id="myform" action="mod.php" method="POST"> 
                    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
                    <input type="email" id="email" class="no-outline"  name="email" value='.$mail.'><br>

                    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
                    <input type="text" id="firstname" class="no-outline"  name="firstname" value='.$nome.'><br>

                    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
                    <input type="text" id="lastname" class="no-outline"  name="lastname" value='.$cognome.'><br>

                    <input type="submit" value="MODIFICA">
                    <br><br><br>
                </form>
            </div>
        </div>';
    echo $form;
    mysqli_close($con);
    ?>
</div>
<?php
  include('../Templates/Footer.php');
?>