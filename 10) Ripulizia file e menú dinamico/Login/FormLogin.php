<?php
include('../Templates/pollo.php');
?>

        <center>
            <div class="PersonalDataDiv">
                <legend class="titoli">PERSONAL DATA</legend><br>
                    <form action="Login.php" method="post">
                        <input type="email" name="email" id="email"  placeholder="Email" /><br><br>
                        <input type="Password" name="pass" id="Password"  placeholder="Password" /><br><br>
                        <input type="submit" name="submit">
                    </form>
                    <button class="back"> <a href="../Templates/FirstPage.php"> Indietro </a> </button><br><br>
            </div>
        </center>
    </body>
