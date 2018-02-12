<?php
session_start();
   
   if (isset($_SESSION['login_user'])) {
      $_SESSION['last_login_timestamp'] = time(); 
   }
   else  
      {  
           header('location:index.html');  
      }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/main.css">
</head>
<body background="gif/HTTPS9tZWRpYS5naXBoeS5jb20vbWVkaWEvQUNSVDMwbTBJS3hJNC9naXBoeS5naWYlog.gif">
  <div id="bod">
  	<style>
		input.MyButton {
		width: 200px;
		padding: 20px;
		cursor: pointer;
		font-weight: bold;
		font-size: 150%;
		background: #3366cc;
		color: #fff;
		border: 1px solid #3366cc;
		border-radius: 10px;
		}
		input.MyButton:hover {
		color: #ffff00;
		background: #000;
		border: 1px solid #fff;
		}
    </style>
    <div id="bod">
    <div class="header">
      <div class="title">
        HXROOT
      </div> 
    	<div class="Hbutton">
    	<p><input class="home" type="button" value="Home" onclick="window.location.href='logsuc.php'" /></p>
        </div>
    </div>
    <section>
    	<header class="sec_head">
    		<h1>Welcome</h1>
        </header>
    	<p><input class="MyButton" type="button" value="Escalator" onclick="window.location.href='escalator.php'" /></p>
    	<p><input class="MyButton" type="button" value="Elevator" onclick="window.location.href='elevator.php'" /></p>  
    	<p><input class="MyButton" type="button" value="Log out" onclick="window.location.href='logout.php'" /></p>  
    </section>  
  </div>
</body>
<html>



