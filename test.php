<?php
	@session_start(); 
	require_once('baza.php');
	
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<style>
</style>		
<body>


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