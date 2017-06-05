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



	if(isset($_SESSION['Login']))
	{
	//---------
	/*
	if(isset($_SESSION['Login']))
	{
		echo'</br>brak dostempu</br>';
		echo 'typ: '.$_SESSION['Typ'].'</br>'; 
	}
	*/
	if ($_SESSION['Login']&& ($_SESSION['Typ']=='Admin'))
	{
		echo'</br>jestś  Admin</br>';
	}
	else 	if ($_SESSION['Typ']=='User')
	{
		echo'</br>jestś  Użytkownikiem</br>';
	}
	else
	{
		echo'</br>zaloguj się</br>';
	}
	echo 'ID: '.$_SESSION['ID'];
	//---------
	}

?>
<a href="wyl.php">wyloguj</a>
<a href="index.php">login</a>
<a href="test.php">test</a>
<body>
</html>