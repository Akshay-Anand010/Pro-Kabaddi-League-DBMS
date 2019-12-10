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
    <span class="navbar-toggler-icon>"</span>
    </button>
 <span class="navbar-brand"><h3>Pro Kabbadi League</h3></span>
 <div class="collapse navbar-collapse" id="navbar">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item mr-2"><a href="login.php" name="About" class="nav-link btn btn-outline-warning">Home</a></li>
     <li class="nav-item mr-2"><a href="player.php" class="nav-link btn btn-outline-warning">Player</a></li>
     <li class="nav-item mr-2"><a href="team.php" class="nav-link btn btn-outline-warning">Team</a></li>
     <li class="nav-item mr-2"><a href="#" class="nav-link btn btn-outline-warning">Stats</a></li>
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

<div id="Experience">
<div class="container mt-5">
<span class="bg-warning text-white">Player Statistics</span><hr class="bg-warning"><br>
<a href="store.php"><button class="btn btn-lg btn-primary text-white">Powerup</button></a><br><br>
<div class="row">
  <div class="container cv">
    <table class="table table-dark table-striped">
    <thead-light>
      <tr>
        <th scope="col">PLayer id</th>
        <th scope="col">Total points</th>
        <th scope="col">matches played</th>
        <th scope="col">not out</th>
        <th scope="col">position</th>
        <th scope="col">Player name</th>
      </tr>
    </thead>
      <tbody>
        <?php
        $connection = mysqli_connect("localhost","root","","kabaddi");
        $entry_database = "stats";
        $query="SELECT * FROM $entry_database";
        $query_run=mysqli_query($connection,$query);

        while($row=mysqli_fetch_assoc($query_run)) {
         $y=$row['id'];
          ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['tot_point'];?></td>
        <td><?php echo $row['mat_played'];?></td>
        <td><?php echo $row['not_out'];?></td>
        <td><?php echo $row['pos'];?></td>
        <td><?php echo $row['pname'];?></td>
        <?php
      }
?>
         </tr>


    </tbody>
  </table>
  </div></div>
</div>
<!-- skill -->
<br><br>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
