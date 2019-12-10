<?php


$con=mysqli_connect("localhost","root","","kabaddi");

$password=$_POST['password'];
$user=$_POST['user'];
if($user=="admin" && $password=="admin")
{
      header('Location:adu.php?welcome ADMINISTRATOR');
}
  else {
header('Location:adu.php?not having admin privilage');
$s = "select * from register where user= '$user' and password='$password'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  session_start();
  $_SESSION['uid1']= $user;
   header('Location:login.php');
}else {
   header('Location:main1.html?wrong username or password');
}
}

 ?>
