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
<title>PRO KABBADI LEAGUE</title>
<style>
body
{
  align-items: center;
  text-align:center;

}
.l
{
  margin-top: 80px;
}
.p
{
  color: #fff;
}
</style>
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
      Update
     </a>
      <div class="dropdown-menu btn" aria-labelledby="navbarDropdown">
    <a class="dropdown-item text-danger" href="del.php">Delete</a>
       <a class="dropdown-item text-primary" href="adu.php">Add</a>
   </ul>
 </div>
  </div>
</nav>
</div>
<div class="l">
<button type="button" class="btn btn-danger btn-lg">Update Player Information </button><br><br>
<button type="button" class="btn btn-danger btn-lg">Update Team Information </button><br><br>
<button type="button" class="btn btn-danger btn-lg">Update Match Information </button><br><br>
<button type="button" class="btn btn-danger btn-lg">Update Ranking Information </button><br><br>
<button type="button" class="btn btn-danger btn-lg">Update Stats Information </button><br><br>
<button type="button" class="btn btn-danger btn-lg">Update Fixtures Information </button><br><br>
<button type="button" class="btn btn-danger btn-lg">Post Latest Updates</button><br><br>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
