<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="bod">
		<header></header>
		<nav></nav>
		<section>
			<header><h1> Login page </h1></header>
			<form action="login.php" method="POST">
  
			  <p>User name:<input type="text" name="userl"></p>
			  <p>Password:<input type="password" name="passl"></p>
			  <p><input type="submit" name="sub" value="Submit"></p>
			</form>

		</section>
	
</body>
</html>
