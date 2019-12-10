<?php

session_start();
$con=mysqli_connect("localhost","root","","project");

$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$team_name=$_POST['team_name'];
$type=$_POST['type'];

$s = "select * from player where id= '$id'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  echo "username already taken";
}else {
   $reg= "insert into player(id,name,age,team_name,type) values('$id','$name','$age','$team_name','$type')";
   mysqli_query($con,$reg);
   echo "registeration successfull";
}

 ?>
