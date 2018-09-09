<?php
require("init.php");
if(isset($_POST['submit']))
{
$dbobject->create(trim($_POST['email']),trim($_POST['name']),trim($_POST['pwd']));
$dbobject->redirect("index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registration</h2>
  <form class="form-inline" method="post" >
  <div class="form-group">
      <label class="sr-only" for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Name"  
      name="name">
    </div>
    <div class="form-group">
      <label class="sr-only" for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" 
       name="email">
    </div>
    <div class="form-group">
      <label class="sr-only" for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" 
      placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
