<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<head>
<title>PRO KABBADI LEAGUE</title>
<style>
body
{
  align-items: center;
  text-align:center;
 background-image: url("asset/tartan.jpg");
 background-repeat: no-repeat;
 background-size: cover;
}
.l
{
  margin-top: 80px;
}
.p
{
  color: #fff;
}
.tb
{
  color: red;
  text-align: center;
  font-size: 2em;
}
.pl
{
  align-content: center;
  background-color: :#ffffb3;
  margin-right: 20px;
}
#input
{
margin-right: 20px;
}
#login-modal.input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
#login-modal .modal-header
{
  background-color: #00e600;
  font-size: 50px;
  color:#fff;
}
#login-modal1 .modal-header
{
  background-color: #00e600;
  font-size: 50px;
  color:#fff;
}
#login-modal2 .modal-header
{
  background-color: #00e600;
  font-size: 50px;
  color:#fff;
}
#login-modal4 .modal-header
{
  background-color: #00e600;
  font-size: 50px;
  color:#fff;
}
#login-modal5 .modal-header
{
  background-color: #00e600;
  font-size: 50px;
  color:#fff;
}
#login-modal6 .modal-header
{
  background-color: #00e600;
  font-size: 50px;
  color:#fff;
}
#login-modal .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color:red;
border-width: 10px;
border-color: red;
border-radius: 8px;
}
#login-modal1 .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color:red;
border-width: 10px;
border-color: red;
border-radius: 8px;
}
#login-modal2 .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color:red;
border-width: 10px;
border-color: red;
border-radius: 8px;
}
#login-modal4 .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color:red;
border-width: 10px;
border-color: red;
border-radius: 8px;
}
#login-modal5 .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color:red;
border-width: 10px;
border-color: red;
border-radius: 8px;
}
#login-modal6 .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color:red;
border-width: 10px;
border-color: red;
border-radius: 8px;
}
.bt
{
margin-left: 20px;
}
.modal fade
{
  border-width: 10px;
  border-color: red;
  border-radius: 8px;
}
#login-modal .form-cantrol
{
  margin-right: 20px;
  margin-left: 5px;
}

</style>
<script type="text/javascript">
function myfunc(e) {
if(e.keyCode == '9') {
    alert("Tab is disabled don't try to press tab");
    e.preventDefault();
}
}
</script>
</head>
<body data-spy="scroll" data-target=".navbar">
<div id="Header">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top" id="navbar">
  <div class="container">
    <button data-toggle="collapse" data-target="#Navbar" class="navbar-toggler">
    <span class="navbar-toggler-icon>"</span>
    </button>
 <a href="#" class="navbar-brand"><h3>Pro Kabbadi League DB ADMINISTRATOR</h3></a>
 <div class="collapse navbar-collapse" id="navbar">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item dropdown btn-lg btn-warning">
     <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Add
     </a>
      <div class="dropdown-menu btn" aria-labelledby="navbarDropdown">
    <a class="dropdown-item text-danger" href="del.php">Delete</a>
       <a class="dropdown-item text-primary" href="update.php">Update</a>
   </ul>
   <li class="nav-item ml-2"><a href="log.php" class="nav-link btn btn-lg btn-danger text-white">Logout</a></li>

 </div>
  </div>
</nav>
</div>
<br><br>
<div class="l">
<a href="#" class="btn btn-warning btn-lg"  data-target="#login-modal" data-toggle="modal" role="button">Add Player Information </a><br><br>
<a href="#" class="btn btn-warning btn-lg"  data-target="#login-modal1" data-toggle="modal" role="button">Add team Information </a><br><br>
<a href="#" class="btn btn-warning btn-lg"  data-target="#login-modal2" data-toggle="modal" role="button">Add Match Information </a><br><br>
<a href="#" class="btn btn-warning btn-lg"  data-target="#login-modal4" data-toggle="modal" role="button">Add Ranking Information </a><br><br>
<a href="#" class="btn btn-warning btn-lg"  data-target="#login-modal5" data-toggle="modal" role="button">Add Stats Information </a><br><br>
<a href="#" class="btn btn-warning btn-lg"  data-target="#login-modal6" data-toggle="modal" role="button">Add team Stats </a><br><br>
</div>
<div class="modal fade" id="login-modal" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add Player</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >


<form onsubmit="checkforblank()" method="post" action="register1.php">

<div class="form-group">
 <label for="id" class="col-form-label"><b>Player id:</b></label><br>
  <input type="number" name="id" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1 input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="name" class="col-form-label"><b>Name:</b></label><br>
  <input type="text" name="name" class="form-cantrol" id="name" autocomplete="off" input onkeydown="myfunc(event)"  required>
</div>
<div class="form-group">
 <label for="age" class="col-form-label"><b>Age:</b></label><br>
<input type="number" name="age" class="form-cantrol"  id="age" input onkeydown="myfunc(event)"   required>
</div>
<div class="form-group">
 <label for="team_name" class="col-form-label"><b>Team name:</b></label><br>
 <select class="" name="team_name" >
   <?php
   $connection = mysqli_connect("localhost","root","","kabaddi");
   $entry_database = "team";
   $query="SELECT * FROM $entry_database";
   $query_run=mysqli_query($connection,$query);
   while($row=mysqli_fetch_assoc($query_run)) {
     ?>
     <option value="<?php echo $row['tname'];?>"><?php echo $row['tname'];?></option>
     <?php

    }

    ?>
 </select>

 <!--
<input type="text" name="team_name" class="form-cantrol" id="team_name" onkeydown="checkforblank1()"   required>
</div> -->
<div class="form-group">
 <label for="type" class="col-form-label"><b>Type:</b></label><br>
<select class="" name="type">
<option value="Raider">Raider</option>
<option value="AllRounder">All Rounder</option>
<option value="Defender">Defender</option>
</select>
</div>

<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit" onsubmit="checkforblank">Add player</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="modal fade" id="login-modal1" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >


<form action="reg2.php" method="post">


<div class="form-group">
 <label for="id" class="col-form-label"><b>Team id:</b></label><br>
  <input type="number" name="tid" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1 input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="name" class="col-form-label"><b>Name:</b></label><br>
  <input type="text" name="tname" class="form-cantrol" id="name" autocomplete="off" input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="age" class="col-form-label"><b>Home City:</b></label><br>
<input type="text" name="hcity" class="form-cantrol"  id="age" input onkeydown="myfunc(event)"required>
</div>
<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit">Add Team</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="modal fade" id="login-modal2" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add Match Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >


<form action="reg3.php" method="post">
<div class="form-group">
 <label for="no" class="col-form-label"><b>Match no:</b></label><br>
  <input type="number" name="mno" min="1" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1 input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="name" class="col-form-label"><b>Venue:</b></label><br>
  <input type="text" name="venue" class="form-cantrol" id="name" autocomplete="off" input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="age" class="col-form-label"><b>Date:</b></label><br>
<input type="date" name="date" class="form-cantrol"  id="age" input onkeydown="myfunc(event)" min="2019-12-10" max="2019-12-31" required>
</div>
<div class="form-group">
 <label for="team_name" class="col-form-label"><b>time:</b></label><br>
<input type="time" name="time" class="form-cantrol" id="team_name" input onkeydown="myfunc(event)"  required>
</div>
<div class="form-group">
 <label for="tname1" class="col-form-label"><b>Team1 Name:</b></label><br>
 <select class="" name="tname1">
   <?php
   $connection = mysqli_connect("localhost","root","","kabaddi");
   $entry_database = "team";
   $query="SELECT * FROM $entry_database";
   $query_run=mysqli_query($connection,$query);
   while($row=mysqli_fetch_assoc($query_run)) {
     ?>
     <option value="<?php echo $row['tname'];?>"><?php echo $row['tname'];?></option>
     <?php

    }

    ?>
 </select>
</div>
<div class="form-group">
 <label for="tname2" class="col-form-label"><b>Team2 Name:</b></label><br>
 <select class="" name="tname2">
   <?php
   $connection = mysqli_connect("localhost","root","","kabaddi");
   $entry_database = "team";
   $query="SELECT * FROM $entry_database";
   $query_run=mysqli_query($connection,$query);
   while($row=mysqli_fetch_assoc($query_run)) {
     ?>
     <option value="<?php echo $row['tname'];?>"><?php echo $row['tname'];?></option>
     <?php

    }

    ?>
 </select>
</div>

<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit">Add Match info</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="modal fade" id="login-modal4" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add Ranking Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >


<form>
  <div class="form-group">
   <label for="id" class="col-form-label"><b>Team id:</b></label><br>
    <input type="number" name="id" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1  input onkeydown="myfunc(event)"required>
  </div>

<div class="form-group">
 <label for="id" class="col-form-label"><b>Matches Played:</b></label><br>
  <input type="number" name="id" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1  input onkeydown="myfunc(event)"required>
</div>
<div class="form-group">
 <label for="name" class="col-form-label"><b>Biggest winning vechiles:</b></label><br>
  <input type="number" name="name" class="form-cantrol" id="name" autocomplete="off" input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="age" class="col-form-label"><b>Finishing position:</b></label><br>
<input type="number" name="age" class="form-cantrol"  id="age" input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="team_name" class="col-form-label"><b>Higest Score:</b></label><br>
<input type="number" name="team_name" class="form-cantrol" id="team_name" input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="type" class="col-form-label"><b>draws:</b></label><br>
<input type="number" name="type" class="form-cantrol" id="type" required>
</div>
<div class="form-group">
 <label for="type" class="col-form-label"><b>loses:</b></label><br>
<input type="text" name="type" class="form-cantrol" id="type" required>
</div>
<div class="form-group">
 <label for="type" class="col-form-label"><b>wins:</b></label><br>
<input type="number" name="type" class="form-cantrol" id="type" required>
</div>

<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit">Add Ranking</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="modal fade" id="login-modal5" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add Stats Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >


<form action="reg5.php" method="post">
  <div class="form-group">
   <label for="id" class="col-form-label"><b>player Id:</b></label><br>
   <select class="" name="id">
     <?php
     $connection = mysqli_connect("localhost","root","","kabaddi");
     $entry_database = "player";
     $query="SELECT * FROM $entry_database";
     $query_run=mysqli_query($connection,$query);
     while($row=mysqli_fetch_assoc($query_run)) {
       ?>
       <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>
       <?php

      }

      ?>
   </select>
  </div>

<div class="form-group">
 <label for="mp" class="col-form-label"><b>Matches played:</b></label><br>
  <input type="number" name="mp" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1 input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="no" class="col-form-label"><b>Not Out:</b></label><br>
  <input type="number" name="no" class="form-cantrol" id="name" autocomplete="off" input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="pos" class="col-form-label"><b>position:</b></label><br>
<input type="number" name="pos" class="form-cantrol"  id="age"input onkeydown="myfunc(event)" required>
</div>
<div class="form-group">
 <label for="tp" class="col-form-label"><b>Total Points earned:</b></label><br>
<input type="text" name="tp" class="form-cantrol" id="team_name" input onkeydown="myfunc(event)" required>
</div>


<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit">Add Stats</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="modal fade" id="login-modal6" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add team Stats</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >


<form action="tri.php" method="post">


<div class="form-group">
 <label for="id" class="col-form-label"><b>Team id:</b></label><br>
 <select class="" name="id">
   <?php
   $connection = mysqli_connect("localhost","root","","kabaddi");
   $entry_database = "team";
   $query="SELECT * FROM $entry_database";
   $query_run=mysqli_query($connection,$query);
   while($row=mysqli_fetch_assoc($query_run)) {
     ?>
     <option value="<?php echo $row['tid'];?>"><?php echo $row['tid'];?></option>
     <?php

    }

    ?>
 </select>
</div>
<div class="form-group">
 <label for="mno" class="col-form-label"><b>match no:</b></label><br>
 <select class="" name="mno">
   <?php
   $connection = mysqli_connect("localhost","root","","kabaddi");
   $entry_database = "match_info";
   $query="SELECT mno FROM $entry_database";
   $query_run=mysqli_query($connection,$query);
   while($row=mysqli_fetch_assoc($query_run)) {
     ?>
     <option value="<?php echo $row['mno'];?>"><?php echo $row['mno'];?></option>
     <?php

    }

    ?>
 </select>
</div>
<div class="form-group">
 <label for="status" class="col-form-label"><b>status:</b></label><br>
<select class="" name="status">
<option value="W">W</option>
<option value="L">L</option>
</select>
</div>
<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit">Add Team stats</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>

<br><br>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
