<?php
/*session_start();
  
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="GET"){
    include 'dbconnect.php';
    $username= $_SESSION['username'];
    $Correct=$_POST["correct"];

    $existSql=" Select * from scores WHERE username='$username' AND quizid=102";
    $result= mysqli_query($conn, $existSql);
    $numRows= mysqli_num_rows($result);
    if($numRows>0){
      //exists=true;

      $showError="Username Already Exists";
    }
    else{
    //$exists=false;
      if(($numRows == 0)){
          $sql="INSERT INTO `scores` ( `username`, `quizid`, `score`, `outof`) 
          VALUES ( '$username', '102', '$Correct','5' )";
          $result= mysqli_query($conn, $sql);
          if($result){
            $showAlert=true;
            
         }

      }
      else{
        $showError="Passwords do not match";
      }
  }
}
*/
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
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<?php /*
if($showAlert){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You Score Has been Updated.
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
}*/
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

		<h1>Result | Idioma Spanish</h1>
		
        <?php
            

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
            session_start();
  
$showAlert=false;
$showError=false;
if($totalCorrect>0){
    include 'dbconnect.php';
    $username= $_SESSION['username'];
    $Correct=$totalCorrect;

    $existSql=" Select * from scores WHERE username='$username' AND quizid=105";
    $result= mysqli_query($conn, $existSql);
    $numRows= mysqli_num_rows($result);
    if($numRows>0){
      //exists=true;

      $exist1Sql=" UPDATE scores SET score='$Correct' WHERE quizid=105 ";
      $result= mysqli_query($conn, $exist1Sql);
     
    }
    else{
    //$exists=false;
      if(($numRows == 0)){
          $sql="INSERT INTO `scores` ( `username`, `quizid`, `score`, `outof`) 
          VALUES ( '$username', '105', '$Correct','5' )";
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
            
                <h3>Choose the correct option for "The Boy"</h3>
                
                <div>

                    <label for="question-1-answers-A">A) el ni??o </label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                </div>
                
                <div>

                    <label for="question-1-answers-B">B)  la ni??o</label>
                </div>
                
                <div>

                    <label for="question-1-answers-C">C) la ni??a</label>
                </div>
                
                <div>

                    <label for="question-1-answers-D">D) el ni??a</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>Choose the correct option for "Some Girls"</h3>
                
                <div>
 
                    <label for="question-2-answers-A">A) unos ni??os</label>
                </div>
                
                <div>

                    <label for="question-2-answers-B">B) unas ni??as</label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                </div>
                
                <div>

                    <label for="question-2-answers-C">C) una ni??a</label>
                </div>
                
                <div>

                    <label for="question-2-answers-D">D) un ni??o</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>Spanish Word for "I"</h3>
                
                <div>
 
                    <label for="question-3-answers-A">A) yo</label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                </div>
                
                <div>

                    <label for="question-3-answers-B">B) me</label>
                </div>
                
                <div>

                    <label for="question-3-answers-C">C) si</label>
                </div>
                
                <div>

                    <label for="question-3-answers-D">D) d??a</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>English to Spanish - "Day"</h3>
                
                <div>

                    <label for="question-4-answers-A">A) hombre</label>
                </div>
                
                <div>

                    <label for="question-4-answers-B">B) momento</label>
                </div>
                
                <div>

                    <label for="question-4-answers-C">C) d??a</label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                </div>
                
                <div>

                    <label for="question-4-answers-D">D) trabajo</label>
                </div>
            
            </li>
            
            <li>
            
                <h3>Spanish Word for "I work"</h3>
                
                <div>

                    <label for="question-5-answers-A">A) yo trabajo</label>&nbsp;&nbsp;
                    <img src="check.png"  width=22px height=22px>
                </div>
                
                <div>

                    <label for="question-5-answers-B">B) me workato</label>
                </div>
                
                <div>

                    <label for="question-5-answers-C">C) yo ni??o</label>
                </div>
                
                <div>

                    <label for="question-5-answers-D">D) me hombre</label>
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

