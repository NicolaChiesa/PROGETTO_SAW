<?php
    include('../Templates/Header.php');
?>
<form id="myform" action="login.php" method="POST"> 
    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="email" id="email" class="no-outline"  name="email" placeholder="E-mail"><br>

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="no-outline" id="pass" name="pass" placeholder="Password"><br>
	<input type="submit" value="LOGIN">
</form>
</body>
</html>