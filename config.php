<?php 

$hostname='localhost';
	$username='root';
	$password='';
	$db_name ='project_inv';

	$connection=mysqli_connect($hostname,$username,$password,$db_name);
	if(mysqli_connect_errno())
	{
		die(mysqli_connect_error());

	}
	


 ?>