<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'error in connection'.mysqli_connect_error();
}
$db=mysqli_select_db($con,'kpl');
if (!$db)
{
	echo 'no database selected';
}
?>