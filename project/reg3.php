<?php

session_start();
$con=mysqli_connect("localhost","root","","kabaddi");


$mno=$_POST['mno'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$time=$_POST['time'];
$tname1=$_POST['tname1'];
$tname2=$_POST['tname2'];
$con1=mysqli_connect("localhost","root","","kabaddi");
if($tname1==$tname2){
echo "pick diffrent teams for match";
}
else{

$s = "select * from match_info where mno= '$mno'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  // echo "match_info already taken";
    header("Location:adu.php?match_info already taken");
}else {
   $reg= "insert into match_info(mno,venue,date,time,tname1,tname2) values('$mno','$venue','$date','$time','$tname1','$tname2')";
   mysqli_query($con,$reg);
   // echo "registeration successfull";
     header("Location:adu.php?registeration successfull");
}
}
 ?>
