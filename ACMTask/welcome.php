<?php

session_start();
if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] != true))
{
  header("location: login.php");
  exit;
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

    <title>Welcome <?php echo $_SESSION['username'] ?> </title>   

  </head>
  <body background = "oo.jpg">
    
    <?php require 'partials/_nav.php' ?> 
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
      <br>

    <div class="container"> 
      <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Hello <?php echo $_SESSION['username'] ?> </h4>
      <p>Welcome to my page. You are logged in as <?php echo $_SESSION['username'] ?> <br> This is a login system demonstration for the ACM inductions. </p>
      <hr>
      <p class="mb-0"> <h5> You can logout using <a href="/ACMTask/logout.php"> this link. </a> </h5> </p>
      </div>
    </div>
  
  </body>
</html>