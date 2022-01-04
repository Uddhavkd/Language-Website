<?php

$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $msg=$_POST["msg"];
    //exists=false;

      if(($fname == true  && $lname == true  && $email == true  && $msg == true)){
          $sql="INSERT INTO `feedback` ( `firstname`, `lastname`, `email`, `feedback`, `mobile`) 
          VALUES ( '$fname', '$lname','$email', '$msg', '$mobile')";
          $result= mysqli_query($conn, $sql);
          if($result){
            $showAlert=true;
            
		 }}
		 
		 
		 if(($fname == false  || $lname == false  || $email == false  || $msg == false)){
			  $showError=true;
			  
		   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <title>Contact Us - XORO Beauty</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;1,400&display=swap" rel="stylesheet">
</head>

<body>

<!-- Top Navigation Bar --> 		
<div class="top-navbar">
	
	<div class="search-box">
		<a href="home.php"> <img src="logo.jpg" class="mainlogo"> </a>
		
		<p class="free">Knowledge of languages is the doorway to wisdom.</p>
	</div>
	
<!-- Top Navigation Menu --> 	
	<div class="menu-bar">
		<ul class="menu-bar-list">
			<li>Welcome to Idioma <span class="	glyphicon glyphicon-user"></span> </li>
			<li><a href="logout.php">Logout</a> <span class=	"glyphicon glyphicon-off"></span> </li>

		</ul>	
	</div>
	
	

</div>
			
	
<!-- Main Menu --> 	

<!-- Main Menu --> 	

<div class="head">
		<div class="mainmenu-bar">
			<ul class="">
				<li ><a href="home.php">Home </a></li>
				<li><a href="home.php#category-section">Languages</a>  </li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="about.php">About </a></li>
			</ul>	
		</div>
		
		
	<!-- Feedback + Reach Us -->
		<div class="contact-content"><br>
		<a href="index.html"> <img src="logo.jpg" class="logo" id="logo"> </a><br>
			<span class="conhead"><h1><b>Get in touch<b></h1>
			<p>Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
			</span>
			<br> 

		<!-- Feedback form -->
			<div class="contact-box">
				<div class="contact-top"><br>

<?php 
if($showAlert){
    echo'<strong>Success!</strong> Your feedback has been submitted.';
}

if($showError){
    echo'<strong>Error!</strong> Enter All details Correctly';
}
?>


					<h1><b>FEEDBACK</b></h1>
					<form class="" action="/ty/contact.php" method="post">
						<div class="fd">
						<div class="i1">
						<div class="input-feed col-xs-5 col-xs-offset-1">
						<label>First Name</label>
						<input type="text" placeholder="" id="fname" name="fname">
						</div>
						
						<div class="input-feed col-xs-5 col-xs-offset-1">
						<label>Last Name</label>
						<input type="text" placeholder="" id="lname" name="lname">
						</div>
						</div>
						
						<br>
						<br><br><br>
						
						<div class="i2">
						<div class="input-feed col-xs-5 col-xs-offset-1">
						<label>Mobile No.</label>
						<input type="text" placeholder="" id="mobile" name="mobile">
						</div>
						
						<div class="input-feed col-xs-5 col-xs-offset-1">
						<label>Email - Id</label>
						<input type="email" placeholder="" id="email" name="email">
						
						
						</div>
						</div>
						
						<br>
						<br>
						<label >Your Message</label><br>						
						<textarea id="txtar"rows="5" cols="80" placeholder="Type Your message here...." id="msg" name="msg"></textarea>
						
						<br>
						<br>
						<div>
						<input type="submit" value="Send" color="black" id="conbtn" ><br><br>
						</div>
						</div>

					</form>
				</div>

				<br>

		<!-- Reach Us -->
				<div class="contact-bottom">
					<div class="">
					<h1><b>REACH US</b></h1>
					<div class="reach-icons">
						<span class="glyphicon glyphicon-envelope"></span>
						<p>      idiomabussiness@gmail.com  </p>
						<span class="glyphicon glyphicon-phone-alt"></span>
						<p>  022 25648813</p>
						<span class="glyphicon glyphicon-map-marker"></span>
						<p> IDIOMA <br>#111 Ground Floor Ace Residance<br> Sliver City Road, <br> Mumbai 400003 </p>
					</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>	

<!--Footer -->
<div class="footer">
		<div class="fi">
			

		</div>
			<div class="foot-row">
			
				<div class="foot-col">
				<h3>Our App Coming Soon</h3>
				<p>App for both Android And IOS</p>
				<img src="https://images.bewakoof.com/web/app_android_v1.png" title="android app" alt="android app" width="100px" class="hidden-xs">
				<img src="https://images.bewakoof.com/web/app_ios_v1.png" title="ios app" alt="ios app" width="100px" class="hidden-xs">

				</div>
				
				<div class="foot-col">
				<h3>Our Purpose</h3>
				<p>Our purpose Is To Serve<br> The Pleasure and Benefits Of Free language education</p>
				</div>
				
				<div class="foot-col">
				<h3>Useful Links</h3>
				<ul>
					<li><a href="about.php" style="color:#C0C0C0;">About</a></li>
					<li><a href="contact.php" style="color:#C0C0C0;">Contact Us</a></li>
					<li><a href="home.php"style="color:#C0C0C0;">Home</a></li>					
				</ul>
				</div>	

				<div class="foot-col">
				<h3>Follow Us </h3>
				<ul>
					<li>Facebook</li>
					<li>Instagram</li>
					<li>Twitter</li>					
				</ul>
				</div>	
				
			</div>
			<hr>
			<p class="copyright"> @CopyRight 2020 Idioma. All Rights Reserved</p>
		
		
	
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