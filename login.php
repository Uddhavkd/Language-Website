<?php

$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];

    
   
        $sql="Select * from users WHERE username='$username' AND password='$password' ";
		$result= mysqli_query($conn, $sql);
		$num= mysqli_num_rows($result);
        if($num == 1){
			$showAlert=true;
			session_start();
			$_SESSION['loggedin'] = true;
			$_SESSION['username']= $username;
			header("location: home.php");
        }

    
    else{
        $showError=true;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>LOGIN</title>
  </head>
  <body>

<?php 
if($showAlert){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You have logged in.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}

if($showError){
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Invalid Login Details.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>
<!-- Top Navigation Bar --> 		
<div class="top-navbar">
	
  <div class="search-box">
    <a href=""> <img src="logo.jpg" class="mainlogo"> </a>
    
    <p class="free">Knowledge of languages is the doorway to wisdom.</p>
  </div>
  
<!-- Top Navigation Menu --> 	
  <div class="menu-bar">
    <ul class="menu-bar-list">
      <li><a href="login.php">Log In</a> <span class="glyphicon glyphicon-user"></span> </li>
      <li><a href="signup.php">Sign Up</a> <span class="	glyphicon glyphicon-envelope"></span> </li>

    </ul>	
  </div>
  
  

</div>
    

<!-- Main Menu --> 	

<div class="head">
  <div class="mainmenu-bar">
    <ul class=" " style="text-align:center;">
      <li style="	font-size:25px;">Welcome To Idioma </li>
    </ul>	
  </div><br><br>

<div class="container">
  <h1 class="text-center">LOGIN</h1>
    
    <form action="/ty/login.php" method="post">

  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" >
    
  </div>


  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>



  <button type="submit" class="btn btn-primary">Login</button>
</form>

<div><br><br><br><br>
<h5>Not Registered yet? Register Now!!</h5>
<a href="signup.php"><button  class="btn btn-primary">Register</button></a>
</div>

</div>

  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>