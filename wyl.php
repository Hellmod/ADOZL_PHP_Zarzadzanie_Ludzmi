<?php


session_start();
session_destroy();
$_session[]=array();   //??
 //echo 'Wylogowano poprawnie </br>'; 
		
			
header('Location: index.php');
		
		
?>
