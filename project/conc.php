<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>DBMS PRO-KABBADI</title>
  <style>
  .can2
  {
    align-items: center
    align:center;
  }
  .wow
  {
    color: red;
    align-self: center;
    text-align: center;
  }
  body
  {
background-image: url('7831.png');
  }
  .c1
  {
    align-items: center;
    align-content: center;
    text-align: center;
  }
    </style>
    <body>
    <div class="wow"><span class="display-1">Pro kabbadi DBMS</span></div>
<div class="container c1">
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-6">
    <div class="jumbotron">
    <h1 class="style-2">Add Player</h1>
        <form action="register.php" method="post" name="contact_form" onsubmit="return validate_form();" tabindex="-1">
          <div class="form-group">
            <label>id</label>
            <input type="number" name="id" class="form-cantrol" maxlength="2" min="1" tabindex=-1 required>
          </div>
          <div class="form-group">
            <label>name</label>
            <input type="text" name="name" class="form-cantrol" autocomplete="off" required>
      </div>
    <div class="form-group">
      <label>age</label>
      <input type="number" name="age" class="form-cantrol" required>
    </div>
    <div class="form-group">
      <label>team_name</label>
      <input type="text" name="team_name" class="form-cantrol" required>
    </div>
    <div class="form-group">
      <label>type</label>
      <input type="text" name="type" class="form-cantrol" required>

    </div>
  <button type="submit" class="btn btn-primary btn-outline">Add Player</button>
</form>
</div>
</div>
<div class="col-sm-6">
<div class="jumbotron">
  <h1 class="style-2">Delete Player</h1>
      <form action="delete.php" method="post">
        <div class="form-group">
          <label>id</label>
          <input type="number" name="id1" class="form-cantrol" required>
        </div>
        <button type="submit" class="btn btn-success btn-outline">Delete player</button>
      </form>
  </div>
</div>
</div>
</div>
<script type="text/javascript">

function validate_form ( )
{
    valid = true;

    if (contact_form.id.value == "" )
    {
        alert ( "Please fill in the 'player id' box." );
        valid = false;
    }
    return valid;
  }
    </script>

</body>
    </html>
