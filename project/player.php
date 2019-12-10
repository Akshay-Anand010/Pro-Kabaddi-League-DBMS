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
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <title>PRO KABBADI LEAGUE</title>
  <style>

  /* table tr,td
  {
     border: 1px solid black;

    text-align: center;
    align-items: center;
    padding: 5px;
    margin: 3px solid red;
    align-items: center;
    width: 400px;
    font-size: 1.2em;
  } */
  /* table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
} */
  .con
  {
    text-align: center;
    align:center;
  }
.c3
{
  height: 200px;
}
.cv
{
  width: 900px;
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

<br><br>
<!-- <div class="container">
  <form class="" action="search1.php" method="POST">
    <input type="text" name="id" placeholder="Enter user id"/>
    <input type="submit" name="search" placeholder="Search by Id"/>

  </form> -->

 <center>
   <form class="" action="ser.php" method="POST">
 <input type="text" placeholder="Search Player by name OR team " name="id1" style="width:700px;height:35px;border: 2px solid red;align:center;">
 <button type="submit" class="btn btn-md btn-success" name="search"><i class="fa fa-search fa-md"></i></button>
 </form>
</center><br><br>

<div class="container cv">

  <table class="table table-dark table-striped">
  <thead-dark>
    <tr>
      <th scope="col">Player Name</th>
      <th scope="col">Age</th>
      <th scope="col">Team Name</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $connection = mysqli_connect("localhost","root","","kabaddi");
    $entry_database = "player";
    $query="SELECT * FROM $entry_database";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)) {
      ?>
    <tr>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['age'];?></td>
      <td><?php echo $row['team_name'];?></td>
      <td><?php echo $row['type'];?></td>
    </tr>
    <?php
   }
   ?>
  </tbody>
</table>
</div>

<?php
if(isset($_POST['search']))
   {
    $idm=$_POST['id1'];
    $_SESSION['name1']=$idm;

   }
 ?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
