 <?php  
 //logout.php 

 session_start(); 
 echo "ypu were there for". $_SESSION['last_login_timestamp']; 
 unset($_SESSION['login_user']); 
 session_destroy();  
 print("session destroyed");//header('location:index.html');  

 ?> 