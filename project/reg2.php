<?php

session_start();
$con=mysqli_connect("localhost","root","","kabaddi");

$tid=$_POST['tid'];
$tname=$_POST['tname'];
$hcity=$_POST['hcity'];



$s = "select * from team where tid= '$tid'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  // echo "team id already taken";
    header("Location:adu.php?team id already taken");
}else {
   $reg= "insert into team(tid,tname,hcity) values('$tid','$tname','$hcity')";
   mysqli_query($con,$reg);
   // echo "registeration successfull";
     header("Location:adu.php?registeration successfull");
}

 ?>
