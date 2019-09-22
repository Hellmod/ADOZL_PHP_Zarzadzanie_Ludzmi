<?php
	if ($_SESSION['Typ']!='User')
			header('Location: index.php?id=subpage/start');
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
	
</script>



<form method="post" action="">
    <p>Date: <input type="text" id="datepicker" name="Date"  onchange="this.form.submit();"></p>
</form>

<?php


	
		$data=@$_POST["Date"];
	if(isset($data)){
		$tab = explode("/", $data);
		@$data= $tab[2].'-'.$tab[0].'-'.$tab[1];	// przejśćie z notacji daty polskiej na amerykańską 
		echo $tab[2].'-'.$tab[1].'-'.$tab[0];
	}

?>
    

 <?php

			$wykonaj=mysql_query("SELECT * from miejsca WHERE DATA = '$data'");  
			
			for($i=7;$i<=22;$i++){
				$wywalkolumne[$i]=false;				
			}
			$licznik=0;// KTÓRE MIEJSCE TERAZ ANALIZUJEMY
			
			while ($wiersz = mysql_fetch_object($wykonaj)){
				$tablica[$licznik][0]=$wiersz->ID;
				$tablica[$licznik][1]=$wiersz->MIEJSCE;
					for($i=7;$i<=22;$i++){						
						$a='a'.$i;	
						
						if($wiersz->$a==$_SESSION['ID']){ // MOJE MIEJSCE 
							$wywalkolumne[$i] = true;
							$tablica[$licznik][$i-5]=${'a'.$i}='<div class="blueSquare" ></div>'; 
						}	
						else if($wiersz->$a=="")	// PUSTE MIEJSCE
							$tablica[$licznik][$i-5]='<input type="radio" name="'.$a.'" value="'.$wiersz->ID.'" id="'.$a.'" align="center"/> ';

						else	// KTOŚ ZAJOŁ TO MIEJSCE
							$tablica[$licznik][$i-5]='<div class="redSquare" ></div> ';
					}
				$licznik++;	
	
			}
// nie wiem czemu to nie działą :C
		// foreach($tablica as $wartosc){
		// 	for($i=7;$i<=22;$i++)
		// 		if($wywalkolumne[$i] && $wartosc[$i-5]!='<div style="background-color: #0000cd; width: 20; height: 20; " ></div>'){
		// 			$wartosc[$i-5]='<div style="background-color: #cd0000; width: 20; height: 20; " ></div> ';
		// 	}	
		// }

?>		
		<form method="post" action="wyjscie.php">
		<table border="1">
        <tr>
        	<td>ID</td> <td>MIEJSCE</td> <td>7</td> <td>8</td> <td>9</td> <td>10</td> <td>11</td> <td>12</td> <td>13</td> <td>14</td> <td>15</td> <td>16</td> <td>17</td> <td>18</td> <td>19</td> <td>20</td> <td>21</td> <td>22</td> 
        </tr>
<?php
	if(@$tablica){
		foreach($tablica as $wartosc){
			for($i=7;$i<=22;$i++)
				if($wywalkolumne[$i] && $wartosc[$i-5]!='<div class="blueSquare" ></div>'){
					$wartosc[$i-5]='<div class="redSquare" ></div> ';
			}				
			echo'<tr>';	
			for($i=0;$i<=17;$i++)
				echo '<td>'.@$wartosc[$i].'</td>';
			echo'</tr>';
		}
	}
?>
		</table>
		<input type="submit" name="wyslij" value="Wyślij">
		<input type="reset" name="wyslij" value="Restart">
		</form>