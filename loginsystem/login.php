<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  require 'partials/dbconnect.php';
  $username=$_POST["username"];
  $password=$_POST["password"];
      $sql="SELECT * FROM `users` WHERE name='$username'";
      $result=mysqli_query($conn,$sql);
      $num=mysqli_num_rows($result);
      if($num == 1){
        while($row=mysqli_fetch_assoc($result)){
          if(password_verify($password, $row['password'])){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['name']=$username;
        header("location: welcome.php");
          }
          else{
            $showError="Invalid Credentials";
        } 
      }
    }
     
    else{
        $showError="Invalid Credentials";
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
    <img src="https://source.unsplash.com/2400x400/?onlineexam,computer" alt="">
    <?php
    if($login){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Succcess! </strong> You are logged in 
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
        <div class="container my-4">
                <h3 style="text-align:center">Login</h3>
                <form action="/loginsystem/login.php" method="post">
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
            </div>
        <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
                
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>