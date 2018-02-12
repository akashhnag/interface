 <?php
session_start();
   
   if (isset($_SESSION['login_user'])) {
     $myfile = fopen("test.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("test.txt"));
fclose($myfile);
   }
   else  
      {  
           header('location:index.html');  
      }  

?> 