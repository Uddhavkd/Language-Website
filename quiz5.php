<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <title>Idioma</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>" />
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
            <li>Welcome to Idioma : Spanish <span class="	glyphicon glyphicon-user"></span> </li>
            <li><a href="logout.php">Logout</a> <span class=	"glyphicon glyphicon-off"></span> </li>

        </ul>	
    </div>
    
    

</div>
        

<!-- Main Menu --> 	

<div class="head">
    <div class="mainmenu-bar">
        <ul class="">
            <li ><a href="home.php">Home </a></li>
            <li><a href="spanish.php#lesson-section">Lessons</a>  </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About </a></li>
        </ul>	
    </div>

<body>

	<div id="page-wrap">

		<h1>SPANISH Chapter 3</h1>
		
		<form action="result5.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3> "Comida" </h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/>
                        <label for="question-1-answers-A">A) Water</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Food</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Burger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Coffee</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Choose the correct option for "Wine"</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/>
                        <label for="question-2-answers-A">A) Comida</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Café</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Vino</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Deliciosa</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>"Tienda"</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                        <label for="question-3-answers-A">A) Market</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Supermarket</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Clothing shop</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Shop</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>English to Spanish - "Affordable"</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/>
                        <label for="question-4-answers-A">A) Barato </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Barata</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Costosa</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Económico</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Spanish Word for "Red"</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/>
                        <label for="question-5-answers-A">A) Rojo</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Naranja</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Verde</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Azul</label>
                    </div>
                
                </li>

                <li>
                
                <h3> "Esta hamburguesa es deliciosa"</h3>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required/>
                    <label for="question-6-answers-A">A) This burger is delicious</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                    <label for="question-6-answers-B">B) This pizza is delicious</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                    <label for="question-6-answers-C">C) This burger is not delicious</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                    <label for="question-6-answers-D">D) This coffee is delicious </label>
                </div>
            
            </li>

            <li>
                
                <h3>"The menu, please"</h3>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required/>
                    <label for="question-7-answers-A">A) El menú, por favor</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                    <label for="question-7-answers-B">B) El menú, disculpe</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                    <label for="question-7-answers-C">C) El me menú, por favor</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                    <label for="question-7-answers-D">D) Me gustaría menú, por favor </label>
                </div>
            
            </li>

            <li>
                
                <h3>"¿Cuánto cuesta/vale?</h3>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required/>
                    <label for="question-8-answers-A">A) How much is this?</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                    <label for="question-8-answers-B">B) What is this?</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                    <label for="question-8-answers-C">C) What is that?</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                    <label for="question-8-answers-D">D) How Much for all? </label>
                </div>
            
            </li>

            <li>
                
                <h3>"Black"</h3>
                
                <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required/>
                    <label for="question-9-answers-A">A) Blanco</label>
                </div>
                
                <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                    <label for="question-9-answers-B">B) Negro</label>
                </div>
                
                <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                    <label for="question-9-answers-C">C) Verde</label>
                </div>
                
                <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                    <label for="question-9-answers-D">D) 	Naranja </label>
                </div>
            
            </li>


            <li>
                
                <h3> "Azul"</h3>
                
                <div>
                    <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required/>
                    <label for="question-10-answers-A">A) Black</label>
                </div>
                
                <div>
                    <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                    <label for="question-10-answers-B">B) 	Pink</label>
                </div>
                
                <div>
                    <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                    <label for="question-10-answers-C">C) Red</label>
                </div>
                
                <div>
                    <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                    <label for="question-10-answers-D">D) 	Blue </label>
                </div>
            
            </li>


            
            </ol>
            
         <div class="container">   <input type="submit" value="Submit" class="submitbtn" style="	display:inline-block;
	background:#2a2a2a;
    color:white;
    padding:5px;
	border-radius: 5px;
	margin:20px 150px;" /> </div>
		
		</form>
	
	</div>


</body>
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

