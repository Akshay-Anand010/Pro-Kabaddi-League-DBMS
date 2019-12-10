<?php

session_start();
$con=mysqli_connect("localhost","root","","kabaddi");

$id=$_POST['id1'];

$s = "select * from player where id= '$id'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
   $reg= "delete from player where id= '$id';";
   mysqli_query($con,$reg);
   echo "deletion successfull";
}
else{
  echo "player id not present";
}
 ?>
