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
	<style type="text/css">
	ul{
		font-size: 25px;
		list-style-type: none;
	}
	a{
		color:red;
	}
	</style>
  <div id="bod">  	
    <div class="header">
      <div class="title">
        HXROOT
      </div> 
    	<div class="Hbutton">
    	<p><input class="home" type="button" value="Home" onclick="window.location.href='loginsuccess.html'" /></p>
        </div>
    </div>
    <section>
    	<header class="sec_head">
    		<h1>Escalator</h1>
        </header>
    	<ul>
    		<li><a href="">google login</a></li>
    		<li><a href="">yahoo</a></li>
    		<li><a href="">google drive</a></li>
    		<li><a href="">cloud</a></li>
    		<li><a href="">youtube</a></li>
    		<li><a href="">hangout</a></li>
    		<li><a href="">outlook</a></li>
    		<li><a href="">linkedin</a></li>
    		<li><a href="">twitter</a></li>
    		<li><a href="">hotmail</a></li>    		
    	</ul>
    </section>  
  </div>
</body>
<html>



