<?php 
require 'config.php';
if(isset($_GET['id']))
{
	
	$id=$_GET['id'];

	$sql='select * from users where id=$id';

     $row=mysqli_fetch_assco($connection,$sql);



}

if(isset($_POST['submit']))
{
	$id=$_POST['id']
    $uname=$_POST['uname']
	$fname=$_POST['fname']
	$lname=$_POST['lname']

	$sql2='update users set (`uname`,`fname`,`lname`) values(`$uname`,`fname`,`lname`)  where `id`=`$id`';
    if(mysqli_query($connection,$sql2))
    {
    	echo "Successfully updated profile details !";
    	Location('dashboard.php');
    }
    else
    {
    	echo "Failed to update the profile details !";
    }

}







 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update Page</title>
 </head>
 <body>

 	<div>
 		<form action="" method="post">
 			<input type="hidden" value="<?= $row['id']  ?>" name="id">
 			<input type="text" value="<?= $row['uname']  ?>" name="uname">
 			<input type="text" value="<?= $row['fname']  ?>" name="fname">
 			<input type="text" value="<?= $row['lname']  ?>" name="lname">
 			<input type="submit" name="submit" value="submit">
 			
 		</form>
 	</div>

 
 </body>
 </html>