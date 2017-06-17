<?php
	@session_start(); 
	require_once('baza.php');	
?>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#datepicker" ).datepicker();
	} );
	</script>

</head>
<style>
</style>		
<body>
<p>Date: <input type="text" id="datepicker"></p>

TEST </br></br>
<?php



				for($i=0;$i<=14;$i++){
				for($j=0;$j<=18;$j++)
					$tablica[$i][$j]="bar";				
			}
			
			echo '<table border="1">';
			foreach($tablica as $wartosc){
				echo'<tr>';	
					for($i=0;$i<=17;$i++)
						echo '<td>'.@$wartosc[$i].'</td>';
				echo'</tr>';
			}
			echo '</table>';

?>
<a href="wyl.php">wyloguj</a>
<a href="index.php">login</a>
<a href="test.php">test</a>
<body>
</html>