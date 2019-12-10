<?php

session_start();
$con=mysqli_connect("localhost","root","","project");

$id=$_POST['id'];


$s = "select * from player where id= '$id'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
//   echo "username already taken";
// }else {
   $reg= "delete from player where id= '$id'";
   mysqli_query($con,$reg);
   echo "deletion successfull";
}
else {
echo "user name does not exist";
}
 ?>
