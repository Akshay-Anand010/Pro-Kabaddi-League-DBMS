<?php
session_start();

$con=mysqli_connect("localhost","root","","kabaddi");

$id=$_POST['id'];
$mno=$_POST['mno'];
$status=$_POST['status'];

$con1=mysqli_connect("localhost","root","","kabaddi");
$s1 = "select * from match_info where mno= '$mno'";
$query_run=mysqli_query($con1,$s1);
while($row=mysqli_fetch_assoc($query_run)){
$tname1=$row['tname1'];
$tname2=$row['tname2'];
}
$s = "select * from teamstatus where sid='$sid'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){

  header('Location:adu.php?already exist');
}
else
{
  $reg= "insert into teamstatus(tid,mno,status,tname1,tname2) values('$id','$mno','$status','$tname1','$tname2');";
  mysqli_query($con,$reg);

   
  header('Location:adu.php?insert success');
}
 ?>
