<?php
    include('../Templates/Header.php');
?>

<p class="title">Fill the form below to register to the Universal Digital Library</p><p class="title">After submitting your data you will 
receive an email to confirm your registration</p>

<div class="mydiv"> 
   <div>
    <form id="myform" action="registration.php" method="POST"> 

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" class="no-outline" id="firstname" name="firstname" placeholder="Firstname"><br>

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" class="no-outline" id="lastname" name="lastname" placeholder="Lastname"><br>

    <i class="fa fa-envelope" style="font-size:9px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="email" id="email" class="no-outline"  name="email" placeholder="E-mail"><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="no-outline" id="pass" name="pass" placeholder="Password"><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="no-outline"  id="confirm" name="confirm" placeholder="Confirm password"><br>
    
	<input type="submit" value="Submit">

   </form>
  </div>
  </div>
</body>
</html>