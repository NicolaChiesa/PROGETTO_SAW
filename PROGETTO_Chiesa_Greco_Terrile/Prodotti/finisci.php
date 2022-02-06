<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$flag=0;
	$sommadur="SELECT SUM(Quantita) AS sommadur FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='1'";
	$res=mysqli_query($con,$sommadur);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommadur']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommadur'].' Durlindana';
		echo'<a href="elimina.php?ID=1&num='.$row['sommadur'].'">Vuoi eliminare il prodotto?</a>';
		$flag=1;
		}

	$sommamart="SELECT SUM(Quantita) AS sommamart FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='3'";
	$res=mysqli_query($con,$sommamart);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommamart']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommamart'].' Mjolnir';
		echo'<a href="elimina.php?ID=3&num='.$row['sommamart'].'">Vuoi eliminare il prodotto?</a>';
		$flag=1;
		}

	$sommaexc="SELECT SUM(Quantita) AS sommaexc FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='2'";
	$res=mysqli_query($con,$sommaexc);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommaexc']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommaexc'].' Excalibur';
		echo'<a href="elimina.php?ID=2&num='.$row['sommaexc'].'">Vuoi eliminare il prodotto?</a>';
		$flag=1;
		}

	$sommaol="SELECT SUM(Quantita) AS sommaol FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='4'";
	$res=mysqli_query($con,$sommaol);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommaol']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommaol'].' Olifante';
		echo'<a href="elimina.php?ID=4&num='.$row['sommaol'].'">Vuoi eliminare il prodotto?</a>';
		$flag=1;
		}

	$sommapom="SELECT SUM(Quantita) AS sommapom FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='5'";
	$res=mysqli_query($con,$sommapom);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommapom']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommapom'].' Pomo della Discordia';
		echo'<a href="elimina.php?ID=5&num='.$row['sommapom'].'">Vuoi eliminare il prodotto?</a>';
		$flag=1;
		}

	$sommaruy="SELECT SUM(Quantita) AS sommaruy FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='6'";
	$res=mysqli_query($con,$sommaruy);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommaruy']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommaruy'].' Ruyi Jingu Bang';
		echo'<a href="elimina.php?ID=6&num='.$row['sommaruy'].'">Vuoi eliminare il prodotto?</a>';
		$flag=1;
		}

	if($flag==0)
		{
		echo'Carrello vuoto';
		}
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>

</body>
</html>