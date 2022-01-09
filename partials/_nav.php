<?php 
$loggedin = false;
if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] == true))
$loggedin = true;


echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/ACMTask">ACM Task: Signup & Login Page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/ACMTask/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>';

      if(!$loggedin)
      {
      echo '<li class="nav-item">
              <a class="nav-link" href="/ACMTask/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ACMTask/signup.php">SignUp</a>
            </li>';
      }
      if($loggedin)      
      {
          echo '<li class="nav-item">
              <a class="nav-link" href="/ACMTask/logout.php">Logout</a>
            </li>';
      }
  
echo   '</ul>    
  </div>
  </nav>';

?>