<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="ms2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>PRO KABBADI LEAGUE</title>


</head>
<body data-spy="scroll" data-target=".navbar">
<div id="Header">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container">
    <button data-toggle="collapse" data-target="#Navbar" class="navbar-toggler">
    <span class="navbar-toggler-icon"></span>
    </button>
 <span class="navbar-brand"><h3>Pro Kabbadi League</h3></span>
 <div class="collapse navbar-collapse" id="navbar">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item mr-2"><a href="login.php" name="About" class="nav-link btn btn-outline-warning">Home</a></li>
     <li class="nav-item mr-2"><a href="player.php" class="nav-link btn btn-outline-warning">Player</a></li>
     <li class="nav-item mr-2"><a href="team.php" class="nav-link btn btn-outline-warning">Team</a></li>
     <li class="nav-item mr-2"><a href="stats.php" class="nav-link btn btn-outline-warning">Stats</a></li>
      <?php

      $connection = mysqli_connect("localhost","root","","kabaddi");
      $entry_database = "register";
       $y=$_SESSION['uid1'];
      $query="SELECT * FROM $entry_database where user='$y';";
      $query_run=mysqli_query($connection,$query);
      while($row=mysqli_fetch_assoc($query_run)) {
        ?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $row['name'];?>
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item text-danger" href="#">Usename :<?php echo $row['user'];?></a>
          <a class="dropdown-item text-primary" href="#">City:<?php echo $row['city'];?></a>
         <?php
       }
         ?>
       </div>
         </li>
      <li class="nav-item mr-2"><a href="log.php" class="nav-link btn btn-danger text-white">Logout</a></li>
   </ul>
 </div>
  </div>
</nav>
</div>
<br><br>

<img src="asset\mm.jpg" class="img-fluid ml-4 " alt="">
<div id="About" class="mt-5">
<div class="container cnm">
<center><span class="bg-danger btn-lg text-white">SEASON 7 TOP PERFORMERS</span></center><br><hr class="bg-secondary">
<div class="row">
  <div class="col lg-4">

  <span class="bg-warning nm">Raider</span><br>
<div class="card cd" style="width: 20rem">
  <img src="asset\pp.png" alt="" class="card-img-top ">
<div class="card-block">
  <h4 class="card-title">Avinash Desai</h4>
  <p class="card-text">Patna Pirates</p>
<span class="bg-primary nm">score:25<?php echo $row['s1'];?></span>
</div>
</div>
</div>
<div class="col lg-4">
<span class="bg-warning nm">All Rounders</span>
<div class="card cd" style="width: 20rem">
<img src="asset\pp.png" alt="" class="card-img-top ">
<div class="card-block">
<h4 class="card-title">Avinash Desai</h4>
<p class="card-text">Patna Pirates</p>
<span class="bg-primary nm">score:39</span>
</div>
</div>
</div>
<div class="col lg-4">
<span class="bg-warning nm">Defender</span>
<div class="card cd" style="width: 20rem">
<img src="asset\pp.png" alt="" class="card-img-top ">
<div class="card-block">
<h4 class="card-title">Avinash Desai</h4>
<p class="card-text">Patna Pirates</p>
<span class="bg-primary nm">score:39</span>
</div>
</div>
</div>
</div>
</div>
<br><br>
<br><br><br>
<hr class="bg-primary"><br>
<center><span class="text-secondary text-lg" style="font-size:30px;font-family:Arial, Helvetica, sans-serif;">VIEW THE LATEST TEAM STANDINGS HERE LIVE</span></center><br>
<center><span class="btn-warning btn-lg text-white" data-target="#login-modal6" data-toggle="modal" role="button">Teamcentre & Powerup</span></center><br><hr class="bg-success"><br>
<!-- skill -->

<div id="Skills" class="mt-5">
<div class="container cm">
<center><span class="bg-success btn-lg text-white">Wins & Loses</span></center><br><hr class="bg-secondary">
<div class="row">

  <table class="table table-dark table-striped">
  <thead-light>
    <tr>
      <th scope="col">sid</th>
      <th scope="col">Match no</th>
      <th scope="col">status</th>
      <th scope="col">Team1</th>
      <th scope="col">Team2</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $connection = mysqli_connect("localhost","root","","kabaddi");
    $entry_database = "teamstatus";
    $query="SELECT * FROM $entry_database";
    $query_run=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($query_run)) {
      $y=$row['mno'];
      ?>
    <tr>
      <td><?php echo $row['sid'];?></td>
      <td><?php echo $row['mno'];?></td>
      <td><?php echo $row['status'];?> by team no :<?php echo $row['tid'];?></td>
      <td><?php echo $row['tname1'];?></td>
      <td><?php echo $row['tname2'];?></td>
      <?php
     }
     ?>
    </tr>

  </tbody>
</table>
  </div>
</div>
</div>


<!-- experience -->

<div class="container mt-5">

<center><span class="bg-warning btn-lg text-white">Upcoming Matches</span></center><br><hr class="bg-secondary">
<div class="scroll container-fluid">


<div class="scroll row">
  <?php
  $connection = mysqli_connect("localhost","root","","kabaddi");
  $entry_database = "match_info";
  $query="SELECT * FROM $entry_database";
  $query_run=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($query_run)) {
    ?>

<div class="col mb-2">
    <div class="card item" style="width: 20rem;">
      <div class="card-body">
        <center><h5 class="card-title"><?php echo $row['tname1'];?></h5>
          <span class="h2 text-danger text-lg">vs</span><br>
          <h5 class="card-title"><?php echo $row['tname2'];?></h5>
        <p class="card-text"><?php echo $row['venue'];?></p>
        <h4 class="text text-danger">starts at</h5>
        <a href="#" class="btn btn-success"><?php echo $row['time'];?></a><br>
        <h4 class="text text-danger">on</h5>
        <span class="bg-primary nm"><?php echo $row['date'];?></span><br><br>
      </center>
      </div>
    </div>
</div>
<?php
}
?>
</div>
</div>
</div>
</div>

<!-- contact -->
<div id="Contact">
<div class="container bff mt-5">
<span class="bg-dark text-white">Our Sponsors</span><hr class="bg-dark">
<h1 >TITLE SPONSOR</h1>
<img src="asset/vivo.jpg" alt="" width="200" height="200" class="img-fluid ml-10">
<hr>
<h1>ASSOCIATE SPONSORS</h1>
<div class="row">
<div class="col lg-4">
<img src="asset/tata.jpg" alt="" width="200" height="200" class="img-fluid">
</div>
<div class="col lg-4">
<img src="asset/d11.png" alt="" width="200" height="200" class="img-fluid">
</div>
<div class="col lg-4">
<img src="asset/honda.jpg" alt="" width="200" height="100" class="img-fluid">
</div>
</div>
<hr>
<h1>PARTNERS</h1>
<img src="asset/ult.jpg" alt="" width="200" height="200" class="img-fluid">

</div>

</div>
<br><br>
<!-- footer -->

<div class="container-fluid bg-dark">
<div class="row">
<div class="col">
<div class>
  <p class="text-white pt-3 text-center">Designed by Akshay Anand</p>
</div>
</div>
</div>
</div>
<div class="modal fade" id="login-modal6" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">TeamCentre & Powerup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>

<div id="div-forms" tabindex="-1" class="pl" >




    <table class="table table-dark table-striped">
    <thead-dark>
      <tr>
        <th scope="col">Team Name</th>
        <th scope="col">Total points</th>
        <th scope="col">Strike Rate</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $connection = mysqli_connect("localhost","root","","kabaddi");
      $query="CALL stor();";
      $query_run=mysqli_query($connection,$query);
      while($row=mysqli_fetch_assoc($query_run)) {
        ?>
      <tr>
        <td><?php echo $row['tname'];?></td>
        <td><?php echo $row['tp1'];?></td>
        <td><?php echo $row['sr'];?> %</td>
      </tr>
      <?php
     }
     ?>
    </tbody>
  </table>

</div>
</div>
</div>
</div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
