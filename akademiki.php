<?php
	
		if(isset($_SESSION['Login']))
	{
	//---------

	if ($_SESSION['Login']&& ($_SESSION['Typ']=='Admin'))
	{
		require('Admin.php');
		//echo'</br>jestś  Admin</br>';
	}
	else if ($_SESSION['Typ']=='User')
	{
		require('User.php');
	}
	else		echo'</br>zaloguj się</br>';
	
	}
?>