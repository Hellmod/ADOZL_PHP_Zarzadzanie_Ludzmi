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
    <p>Data: <input type="text" id="datepicker" name="Date"  onchange="this.form.submit();"></p>
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

			$wykonaj=mysqli_query($connection,"SELECT * from miejsca WHERE DATA = '$data'");  
			
			for($i=7;$i<=22;$i++){
				$wywalkolumne[$i]=false;				
			}
			$licznik=0;// KTÓRE MIEJSCE TERAZ ANALIZUJEMY
			
			while ($wiersz = mysqli_fetch_object($wykonaj)){
				//$tablica[$licznik][0]=$wiersz->ID;
				$tablica[$licznik][0]=$wiersz->MIEJSCE;
					for($i=7;$i<=22;$i++){						
						$a='a'.$i;	
						
						if($wiersz->$a==$_SESSION['ID']){ // MOJE MIEJSCE 
							$wywalkolumne[$i] = true;
							$tablica[$licznik][$i-6]=${'a'.$i}='<div class="blueSquare .bg-primary" ></div>'; 
						}	
						else if($wiersz->$a=="")	// PUSTE MIEJSCE
							$tablica[$licznik][$i-6]='<input type="checkbox" name="'.$a.'" value="'.$wiersz->ID.'" class="'.$a.'" align="center"/> ';

						else	// KTOŚ ZAJOŁ TO MIEJSCE
							$tablica[$licznik][$i-6]='<div class="redSquare" ></div> ';
					}
				$licznik++;	
	
			}


?>		
		<form method="post" action="subpage/wyjscie.php">
		<table class="table table-bordered">
  		<thead>
        <tr>
        	<th scope="col">MIEJSCE</th> <th scope="col">7</th> <th scope="col">8</th> <th scope="col">9</th> <th scope="col">10</th> <th scope="col">11</th> <th scope="col">12</th> <th scope="col">13</th> <th scope="col">14</th> <th scope="col">15</th> <th scope="col">16</th> <th scope="col">17</th> <th scope="col">18</th> <th scope="col">19</th> <th scope="col">20</th> <th scope="col">21</th> <th scope="col">22</th> 
		</tr>
		</thead>
			<tbody>
				<?php
					if(@$tablica){
						foreach($tablica as $wartosc){
							for($i=7;$i<=22;$i++)
								if($wywalkolumne[$i] && $wartosc[$i-6]!='<div class="blueSquare .bg-primary" ></div>'){
									$wartosc[$i-6]='<div class="redSquare" ></div> ';
							}	
										
							echo'<tr>';	
							echo '<th scope="row">'.@$wartosc[0].'</td>';
							for($i=1;$i<=16;$i++){

								echo '<td>'.@$wartosc[$i].'</td>';
							}
								
							echo'</tr>';
						}
					}
				?>
			</tbody>
		</table>
		<input type="submit" name="wyslij" value="Wyślij">

		</form>
		<script>


var checkboxs = document.getElementsByTagName('input');
for(i=0; i<checkboxs.length; i++ ) {
    checkboxs[i].onclick = function(a) {
       //if(a.ctrlKey) {
		var x=document.getElementsByClassName(this.className);
		if(this.checked){
			for(j=0; j<x.length; j++ ) 
				x[j].disabled = true;
			
			this.disabled = false;
		}
		else{
			for(j=0; j<x.length; j++ ) 
				x[j].disabled = false;
		
			//this.disabled = true;
		}
       // }
    }
}
	

</script>