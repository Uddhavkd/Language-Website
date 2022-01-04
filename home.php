<?php
session_start();

if( !isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header('location:login.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <title>Idioma</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

	<div class="head">
		<div class="mainmenu-bar">
			<ul class="">
				<li ><a href="home.php">Home </a></li>
				<li><a href="#category-section">Languages</a>  </li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="about.php">About </a></li>
			</ul>	
		</div>
		
<!-- Header Banner -->	
		<div class="row">
			<div class="col">
			<h1>Idioma</h1>
			<p>A world of knowledge and a platform for free learners<br>
			to enjoy and discover the taste of languages.</p>
			<a href="#category-section" class="btn">Explore Now &#8594;</a>
			</div>
			<div class="col">
				<img src="2.png">
		
			</div>
				
		</div>	
			<a name="category-section"></a>

	</div>
	

	
<!--Categories -->
	<
	<div class="category-box">
		<h1 style="color:#110f40;">Discover Languages</h1>
		<div class="row-cat">
			<div class="col-cat">
				<a href="spanish.php"><img src="yellow.jpg" class="i" id="img1"></a>
				<div class="textc">
				Spanish
				</div>
			</div>
		</div>

		<div class="row-cat">
			<div class="col-cat">
				<a href="#german-section"><img src="yellow.jpg" class="i" id="img1"></a>
				<div class="textc">
				German
				</div>
			</div>
		</div>
		

		

	</div>
		<hr>

<!--Offer Zone -->	
		<a name="offer-section"></a>
		<div class="offer-row">
			<div class="offer-col" >

			<img src="3.jpg">
			</div>
			<div class="offer-col">
							<h1>Learn Spanish</h1>
			<p>Learn Spanish in just 5 minutes a day with Idioma for FREE  <br>
			Whether you’re a beginner starting with the basics or looking to practice <br>
      your reading, writing, and speaking.</p>
			<a href="spanish.php" class="btn">Learn Now &#8594;</a>
			
		
			</div>
			
		</div>	
		<a name="german-section"></a>
		<div class="offer-row">

			<div class="offer-col" >
			<h1>Coming Soon </h1>
			<p> German Language Coming Soon on Idioma <br>	
			Learn German in just 5 minutes a day with Idioma for FREE <br>
      </p>
			<a href="" class="btn">Coming Soon</a>
			
			</div>
			<div class="offer-col">
			<img src="german.jpg">			
		
			</div>
		</div>	
		
<!--Brands
	<div class="brands">
	<h1 align="center" ><b>Our Partners</b></h1>

	<img src="p3.png">
	<img src="p2.png">
	<img src="p1.png">
	<img src="p4.png">
	
	
	</div>-->
	
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