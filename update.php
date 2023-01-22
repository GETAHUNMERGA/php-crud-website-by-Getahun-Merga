<?php
include "connect.php";
$id=$_GET["updateid"];
$sql="select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row["name"];
$email=$row["email"];
$mobile=$row["mobile"];
$password=$row["password"];
if(isset($_POST["submit"])){

$fname=$_POST["name"];
  $email=$_POST["email"];
  $mobile=$_POST["mobile"];
  $password=$_POST["password"];
  $sql="update crud set name='$fname', email='$email', mobile='$mobile', password='$password' where id='$id'";
  $result=mysqli_query($con,$sql);
  if($result){

//echo "Data inserted successfully";
header("location:display.php");
  }
  else{
    die(mysqli_error($con));
  }
}


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Crud Operations</title>
  </head>
  <body>
<div class="container my-5">
<form method="post">
  <div class="form-group">
  <label>Ename</label>
    <input type="text" class="form-control" placeholder="enter full name" name="name" autocomplete="off" value=<?php echo $name;?>>
</div>
<div class="form-group">
  <label>Email</label>
    <input type="email" class="form-control" placeholder="enter your emai" name="email"autocomplete="off" value=<?php echo $email;?>>
</div>
<div class="form-group">
  <label>Mobile</label>
    <input type="text" class="form-control" placeholder="enter you mobile" name="mobile"autocomplete="off" value=<?php echo $mobile;?>>
</div>
<div class="form-group">
  <label>password</label>
    <input type="text" class="form-control" placeholder="enter your password" name="password"autocomplete="off" value=<?php echo $password;?>>
</div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div> 

  </body>
</html>
