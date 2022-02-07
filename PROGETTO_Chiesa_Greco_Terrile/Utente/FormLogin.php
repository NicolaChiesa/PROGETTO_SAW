<?php
    include('../Templates/Header.php');
?>

<div class="container">
 <div class="row align-items-md-stretch">
      <div class="col"></div>
      <div class="DataDiv col-md-6">
        <p class="testoTitolo">Accedi</p><br>
        <form id="myform" action="login.php" method="POST"> 
            <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
            <input type="email" id="email" class="no-outline"  name="email" placeholder="E-mail"><br>

            <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
            <input type="password" class="no-outline" id="pass" name="pass" placeholder="Password"><br>
            <input type="submit" value="Login">
            <br><br><br>
        </form>
        </div>
        <div class="col"></div>
    </div>
</div>

<?php
  include('../Templates/Footer.php');
?>