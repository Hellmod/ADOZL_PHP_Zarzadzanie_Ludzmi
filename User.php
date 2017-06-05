

<form method="post" action="wyjscie.php">

<table border="1">
<tr>	
		<td>ID</td><td>MIEJSCE</td><td>DATA</td><td>7</td><td>8</td><td>9</td>
</tr>




<?php

		$wykonaj=mysql_query("SELECT * from miejsca");  
					  
		
		while ($wiersz = mysql_fetch_object($wykonaj))
		{
		
		
			for($i=7;$i<=9;$i++)
			{
				$a='a'.$i;
				if($wiersz->$a=="") ${'a'.$i}='<input type="radio" name="'.$a.'" value="'.$wiersz->ID.'" id="'.$a.'"/> ';
				else if($wiersz->$a==$_SESSION['ID'])
				{
					${'a'.$i}='<div style="background-color: #0000cd;">.</div>';
					$wywalkolumne = $i;
				}	
				else ${'a'.$i}='<input type="radio" disabled="disabled" /> ';
				//dostajemy w wiersz->$a zawartosci kolejnych kolumn następnie pętlą for przechodzimy po kolejnych kolumnach doposując numer kilumny do $a np $a1 
			}
			
				
			 echo'<tr>';	
			 echo '<td>'.$wiersz->ID.'</td><td>'.$wiersz->MIEJSCE.'</td><td>'.$wiersz->DATA.'</td><td>'. $a7 .'</td><td>'.$a8 .'</td><td>'.$a9 .'</td>';
			 echo'</tr>';
			 
			//mysql_close($connection);
		}
		
		
		
		
	


	echo '
	</table>
	<input type="submit" name="wyslij" value="Wyślij">
	<input type="reset" name="wyslij" value="Restart">
	</form>
	';
	//----- testy nad DOM
	if(isset($wywalkolumne))
	echo "<script>	document.getElementById('a".$wywalkolumne."').disabled = 'disabled';  </script>";
	// do_zrobienia formularzy typu radio muszę zamić disbled dla wszystkich radiach o tym samym id 
	
	
	//echo "<script>	document.getElementByTagName('a".$wywalkolumne."').removeAttribute(disabled);  </script>";



	//------ kniec testów nad DOM  http://stackoverflow.com/questions/3557266/cant-set-disabled-false-javascript
		
	
		
	//------------ koniec wyswietlania dla urzytkownika
