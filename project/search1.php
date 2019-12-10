<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>PRO KABBADI LEAGUE</title>
  <style>

  table tr,td
  {
    color: white;
    background-color: purple;
    text-align: center;
    align-items: center;
    padding: 5px;
    margin: 3px solid;
    align-items: center;
    width: 500px;
  }
  .con
  {
    text-align: center;
    align:center;
  }
.c3
{
  height: 400px;
}
  </style>

</head>
<body data-spy="scroll" data-target=".navbar">
<div id="Header">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container">
    <button data-toggle="collapse" data-target="#Navbar" class="navbar-toggler">
    <span class="navbar-toggler-icon>"</span>
    </button>
 <a href="#" class="navbar-brand"><h3>Pro Kabbadi League</h3></a>
 <div class="collapse navbar-collapse" id="navbar">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item"><a href="#About" name="About" class="nav-link">Player</a></li>
     <li class="nav-item"><a href="#" class="nav-link">Team</a></li>
     <li class="nav-item"><a href="#" class="nav-link">Tickets</a></li>
     <li class="nav-item"><a href="#" class="nav-link">Stats</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Fixtures</a></li>
       <li class="nav-item"><a href="#" class="nav-link">Latest Updates</a></li>
   </ul>
 </div>
  </div>
</nav>
</div>
</div>
<br><br>

  <form class="" action="search1.php" method="POST">
    <input type="text" name="id" placeholder="Enter user id"/>
    <input type="submit" name="search" placeholder="Search by Id"/>

  </form>
 <br>
<div class="container con">

  <div class="card bg-white">



<?php

$connection = mysqli_connect("localhost","root","","kabaddi");


$entry_database = "player";


if(isset($_POST['search']))
   {
     $id=$_POST['id'];
     $query="SELECT * FROM $entry_database where id='$id'";
     $query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($query_run)) {
  ?>

      <div class="card-title my-5">
        <h3 class="display-4 ml-5"><?php echo $row['name'];?></h3>
  <table class="table table-respnsive ml-4">
                  <tr>
                    <td  class="text-muted">Age</td>
                     <td>:</td>
                     <td><?php echo $row['age'];?></td>
                  </tr>
                  <tr>
                    <td  class="text-muted">Team Name</td>
                     <td>:</td>
                     <td><?php echo $row['team_name'];?></td>
                  </tr>
                  <tr>
                    <td  class="text-muted">Type</td>
                     <td>:</td>
                     <td><?php echo $row['type'];?></td>
                  </tr>
                </table>
  <?php

}


?>

</div>
</div>
</div>

"update teamstatus
        set
       mno='$mno'
      and status='$status'
      where tid='$id'";

  UPDATE team SET
    loss=loss+1
    AND tm=tm+1
    WHERE status='L'

    update teamstatus set
            tid='$id'
            and mno='$mno'
            and status='$status';

            UPDATE team
set loss=(SELECT COUNT(*) FROM teamstatus WHERE tid=new.tid AND new.status='L')
WHERE tid=new.tid

UPDATE team
set tm=(SELECT COUNT(*) FROM teamstatus WHERE tid=new.tid)
WHERE tid=new.tid



INSERT INTO stats(pname)
VALUES(SELECT name
       FROM player p
       WHERE p.pid=new.id)

       INSERT INTO stats(pname)
       WHERE pname IN (SELECT name
                       FROM player p
                       WHERE p.id=new.id)

                       INSERT INTO stats(pname) VALUES(SELECT name FROM player p WHERE p.pid=new.id)
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
