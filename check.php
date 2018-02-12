<?php
  if (empty($_POST["users"])) {
    header("Location:empty_error.html");
  }
   if(empty($_POST["passs"])){
    header("Location:empty_error.html");
  }
  else{
$serv="localhost";
$usernm="root";
$passwrd="root123";
$db="data";
$conn=mysqli_connect($serv,$usernm,$passwrd,$db);
$user=$_POST['users'];
$pass=$_POST['passs'];
if(!$conn)
{
  die("unable to connect to the server ".mysqli_connect_error());
}
else{
  $sql1 = "SELECT * FROM users WHERE uid = '$user'";
  $result = mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result)>0)
  {
    header('Location:useduser.html');
  }

else {
              $sql="INSERT INTO users(id,uid,pass) VALUES(NULL,'$user','$pass')";
              if(mysqli_query($conn,$sql))
              {
                print("details inserted");
                mysqli_close();
                header('Location:signsuccess.html');
              }
              else {
                print("sql didn't execute");
                mysqli_close();
                header('Location:signfailure.html');
              }
}
      
}
}
?>