<?php
	@session_start(); 
	header('Location: index.php');	
?>

<?php
    if(@$_SESSION['Typ']=="Admin"){
        echo 'witaj';
    }
    else{
        require('start.php');
    }
?>

