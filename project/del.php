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
      Delete
     </a>
      <div class="dropdown-menu btn" aria-labelledby="navbarDropdown">
    <a class="dropdown-item text-danger" href="adu.php">Add</a>
       <a class="dropdown-item text-primary" href="update.php">Update</a>
   </ul>
 </div>
  </div>
</nav>
</div>
<div class="l">
<button type="button" class="btn btn-success btn-lg" data-target="#login-modal1" data-toggle="modal" role="button">Delete Player Information </button><br><br>
<button type="button" class="btn btn-success btn-lg" data-target="#login-modal2" data-toggle="modal" role="button">Delete Team Information </button><br><br>
<button type="button" class="btn btn-success btn-lg" data-target="#login-modal3" data-toggle="modal" role="button">Delete Match Information </button><br><br>
<button type="button" class="btn btn-success btn-lg" data-target="#login-modal4" data-toggle="modal" role="button">Delete Ranking Information </button><br><br>
<button type="button" class="btn btn-success btn-lg" data-target="#login-modal5" data-toggle="modal" role="button">Delete Stats Information </button><br><br>
<button type="button" class="btn btn-success btn-lg">Delete Fixtures Information </button><br><br>
</div>
</body>

<div class="modal fade" id="login-modal1" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Delete Player Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >
<form action="del1.php" method="post">
<div class="form-group">
 <label for="id1" class="col-form-label"><b>player id:</b></label><br>
  <input type="number" name="id1" class="form-cantrol"  tabindex=-1 required>
</div>

<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit">Delete Player</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
