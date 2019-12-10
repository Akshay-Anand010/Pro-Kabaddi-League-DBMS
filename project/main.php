<?php

$con=mysqli_connect("localhost","root","","kabaddi");

$name=$_POST['name'];
$user=$_POST['user'];
$city=$_POST['city'];
$dob=$_POST['dob'];
$password=$_POST['password'];

$s = "select * from register where user= '$user'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){

   header('Location:main.html?username already taken');
}else {
   $reg= "insert into register(name,user,city,dob,password) values('$name','$user','$city','$dob','$password')";
   mysqli_query($con,$reg);

   header('Location:main.html?registeration successfull');
}

 ?>
