<?php 
session_start();?>
<?php require ('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
	body{background-color:#00FFFF;}
	.wrapper{width:400px; padding: 20px;}
</style>
</head>
<body>
<div class="wrapper">	
<form method="POST">
	<label>Username:</label><input type="text" name="username" required="">
	<label>Password:</label><input type="password" name="password" required="">
	<input type="submit" name="login" value="Login">
</form>
</div>
<?php require('connection.php'); ?>
<?php 
 
?>