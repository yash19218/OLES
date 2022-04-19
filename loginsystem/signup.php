<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  require 'partials/dbconnect.php';
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
 
//check whether this username exists or not 
  $sqlExists="SELECT* FROM `users` WHERE name='$username'";
  $result=mysqli_query($conn,$sqlExists);
  $numExistsrows=mysqli_num_rows($result);
  if($numExistsrows>0){
    $showError="Username Already exists";
  }
  else{
  if(($password==$cpassword)){
    $hash =password_hash($password , PASSWORD_DEFAULT);
      $sql="INSERT INTO `users` (`name`, `password`, `dt`) 
      VALUES ('$username', '$hash', current_timestamp())";
      $result=mysqli_query($conn,$sql);
      if($result){
        $showAlert=true;
      }
  }
  else{
    $showError="Passwords do not match";
  }
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <?php
    if($showAlert){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your account has been created.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error ! </strong>'.$showError.'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    
    ?>
    <h3 style="text-align:center">Sign Up</h3>
        <div class="container">
                <form action="/loginsystem/signup.php" method="post">
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" maxlength="20" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
            </div>
        <div class="form-group">
                <label for="password">Password</label>
                <input type="password" maxlength="20" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
                <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter password again">
                <small id="emailHelp" class="form-text text-muted">Make sure you enter the same password</small>
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>