<?php
session_start();          
$serv="localhost";
$usernm="root";
$passwrd="root123";
$db="data";
$conn=mysqli_connect($serv,$usernm,$passwrd,$db);
$user=$_POST['userl'];
$pass=$_POST['passl'];
if(!$conn)
{
  die("unable to connect to the server ".mysqli_connect_error());
}
else
{
      $sql = "SELECT * FROM users WHERE uid = '$user' and pass = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user']=$user;
         header("location: logsuc.php");
      }else {
      	 mysqli_close($conn);
         header("Location: error.html");

     }
 }
 ?>