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

<?php 
?>
			
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

	<div >

		<h1>Result | Greetings And Introducing Yourself</h1>
		
        <?php
            

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "D") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "C") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "B") { $totalCorrect++; }
            if ($answer10 == "A") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
            
            session_start();
  
$showAlert=false;
$showError=false;
if($totalCorrect>0){
    include 'dbconnect.php';
    $username= $_SESSION['username'];
    $Correct=$totalCorrect;

    $existSql=" Select * from scores WHERE username='$username' AND quizid=2";
    $result= mysqli_query($conn, $existSql);
    $numRows= mysqli_num_rows($result);
    if($numRows>0){
      //exists=true;

      $exist1Sql=" UPDATE scores SET score='$Correct' WHERE quizid=2 ";
      $result= mysqli_query($conn, $exist1Sql);
     
    }
    else{
    //$exists=false;
      if(($numRows == 0)){
          $sql="INSERT INTO `scores` ( `username`, `quizid`, `score`, `outof`) 
          VALUES ( '$username', '2', '$Correct','10' )";
          $result= mysqli_query($conn, $sql);
          if($result){
            $showAlert=true;
            
         }

      }
      else{
        echo "Failed";
      }
  }
}
        ?>
        &nbsp;&nbsp;
   
	
    </div>
 <div class="container" style="text-align:center;">
     <h1>Correct Answers</h1>
     
     <ul style="list-style-type: none;">
            
            <li>
            
                <h3>Choose the correct option for "How are you?" (Formal)</h3>
                
                <div>

                    <label for="question-1-answers-A">A) Buenos días </label>
                </div>
                
                <div>

                    <label for="question-1-answers-B">B)  Estoy bien</label>
                </div>
                
                <div>

                    <label for="question-1-answers-C">C) ¿Cómo está?</label>
                </div>
                
                <div>

                    <label for="question-1-answers-D">D)¿Cómo estás?</label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                    
                </div>
            
            </li>
            
            <li>
            
                <h3>Choose the correct option for "Good morning"</h3>
                
                <div>
 
                    <label for="question-2-answers-A">A) Buenos días</label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                </div>
                
                <div>

                    <label for="question-2-answers-B">B) Buenas tardes</label>
                </div>
                
                <div>

                    <label for="question-2-answers-C">C) Buenas noches</label>
                </div>
                
                <div>

                    <label for="question-2-answers-D">D) Estoy bien</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>"Gracias"</h3>
                
                <div>
 
                    <label for="question-3-answers-A">A) Welcome</label>
                </div>
                
                <div>

                    <label for="question-3-answers-B">B) Excuse me</label>
                </div>
                
                <div>

                    <label for="question-3-answers-C">C) Thank You</label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                </div>
                
                <div>

                    <label for="question-3-answers-D">D) Hello</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>English to Spanish - "See you tommorow"</h3>
                
                <div>

                    <label for="question-4-answers-A">A) Hasta luego</label>
                </div>
                
                <div>

                    <label for="question-4-answers-B">B) Cuídate</label>
                </div>
                
                <div>

                    <label for="question-4-answers-C">C) Hasta mañana</label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                </div>
                
                <div>

                    <label for="question-4-answers-D">D) Disculpe</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>Spanish Word for "Happy New Year"</h3>
                
                <div>

                    <label for="question-5-answers-A">A) ¡Feliz navidad!</label>
                </div>
                
                <div>

                    <label for="question-5-answers-B">B) ¡Feliz cumpleaños!</label>
                </div>
                
                <div>

                    <label for="question-5-answers-C">C) ¡Feliz año nuevo!</label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                </div>
                
                <div>

                    <label for="question-5-answers-D">D) ¡Feliz día del padre!</label>
                </div>
            
            </li>

            <li>
            
            <h3>"¡Feliz cumpleaños!"</h3>
            
            <div>

                <label for="question-6-answers-A">A) Happy birthday </label>&nbsp;&nbsp;
                <img src="check.png"  width=22px height=22px>
            </div>
            
            <div>

                <label for="question-6-answers-B">B) Happy holiday</label>
            </div>
            
            <div>

                <label for="question-6-answers-C">C) Happy new year</label>
            </div>
            
            <div>

                <label for="question-6-answers-D">D) Merry christmas</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>"What is your name?"</h3>
            
            <div>

                <label for="question-7-answers-A">A) ¿De dónde eres?s</label>
            </div>
            
            <div>

                <label for="question-7-answers-B">B) ¿y tú?</label>
            </div>
            
            <div>

                <label for="question-7-answers-C">C) ¿Cómo te llamas?</label>&nbsp;&nbsp;
                <img src="check.png"  width=22px height=22px>
            </div>
            
            <div>

                <label for="question-7-answers-D">D) ¡Feliz día del padre!</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>Spanish Phrase for "I am a Student"</h3>
            
            <div>

                <label for="question-8-answers-A">A) Soy un hombre</label>
            </div>
            
            <div>

                <label for="question-8-answers-B">B) Soy una niña</label>
            </div>
            
            <div>

                <label for="question-8-answers-C">C) Soy estudiante</label>&nbsp;&nbsp;
                <img src="check.png"  width=22px height=22px>
            </div>
            
            <div>

                <label for="question-8-answers-D">D) Soy un niño</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>Spanish Word for "Yes"</h3>
            
            <div>

                <label for="question-9-answers-A">A) Si</label>
            </div>
            
            <div>

                <label for="question-9-answers-B">B) Sí</label>&nbsp;&nbsp;
                <img src="check.png"  width=22px height=22px>
            </div>
            
            <div>

                <label for="question-9-answers-C">C) No</label>
            </div>
            
            <div>

                <label for="question-9-answers-D">D) Yay</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>"¿y tú?"</h3>
            
            <div>

                <label for="question-10-answers-A">A) And You?</label>&nbsp;&nbsp;
                <img src="check.png"  width=22px height=22px>
            </div>
            
            <div>

                <label for="question-10-answers-B">B) For me?</label>
            </div>
            
            <div>

                <label for="question-10-answers-C">C) For who?</label>
            </div>
            
            <div>

                <label for="question-10-answers-D">D) No i dont</label>
            </div>
        
        </li>
        
        </ul>



 <!--    <ul>

     <li> 
     <h3>WordPress is a...</h3>
     <div>
          <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
          <label for="question-1-answers-C">C) CMS</label>
     </div>
     </li>

     <li> 
     <h3>SEO is Part Of...</h3>
     <div>
     <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
    <label for="question-2-answers-D">D) Digital Marketing</label>&nbsp;&nbsp;
    <img src="check.png"  width=22px height=22px>
     </div>
     </li>

     <li> 
     <h3>PHP is a....</h3>
     <div>
     <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Server Side Script</label>
     </div>
     </li>

     <li> 
     <h3>Localhost IP is..</h3>
     <div>
     <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 127.0.0.0</label>
     </div>
     </li>

     <li> 
     <h3>Webdevtrick Is For</h3>
     <div>
     <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) All Above These</label>
     </div>
     </li>

     </ul> -->

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

