<?php

session_start();
$con=mysqli_connect("localhost","root","","kabaddi");


$id=$_POST['id'];
$mp=$_POST['mp'];
$no=$_POST['no'];
$pos=$_POST['pos'];
$tp=$_POST['tp'];
$con1=mysqli_connect("localhost","root","","kabaddi");
$s1 = "select * from player where id= '$id'";
$query_run=mysqli_query($con1,$s1);
while($row=mysqli_fetch_assoc($query_run)){
$pname=$row['name'];
}
$s = "select * from stats where id= '$id'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  // echo "stats already entered";
    header("Location:adu.php?stats already entered");

}else {
   $reg= "insert into stats(id,mat_played,not_out,pos,tot_point,pname) values('$id','$mp','$no','$pos','$tp','$pname')";
   mysqli_query($con,$reg);
   // echo "registeration successfull";
     header("Location:adu.php?registeration successfull");
}


 ?>
