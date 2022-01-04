<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Text to Speech with ResponsiveVoice.JS</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://treehouse-code-samples.s3.amazonaws.com/poly/css/application.css'>

      <link rel="stylesheet" href="spanish_basic.css?v=<?php echo time(); ?>">
      <link rel="stylesheet" href="spanish_basic2.css?v=<?php echo time(); ?>">
      <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
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

<div class=container>                                                                      
   <select class="voice" id="voiceselection">

      <option value="Spanish Latin American Female">Spanish Male</option>
      

  </select>

  <ul class="list-group">
  <li><a href="#" class="list-group-item list-group-item-action active">
    <h3>Spanish Basics</h3>
  </a></li>
  <li><a href="#alphabets" class="list-group-item list-group-item-action">Alphabets</a></li>
  <li><a href="#articles" class="list-group-item list-group-item-action">Articles</a></li>
  <li><a href="#pos" class="list-group-item list-group-item-action">Parts of Speech</a></li>
  <li><a href="#quiz" class="list-group-item list-group-item-action">Lesson Quiz</a></li>
  </ul>

<!-- Alphabets -->  
<a name="alphabets"></a> 
<div><br><br>
<h1 style="text-align:center; font-size:44px; font-weight:bold;">Alphabets</h1>
<p style="text-align:center; font-size:25px;">A language’s alphabet is its building blocks. Trying to learn how to write in Spanish
without first learning its alphabet is a bit like trying to build a brick house without
touching the individual bricks! It is impossible to do a good job that way.
Even just learning the basics of the alphabet will allow you to start recognizing
simple Spanish words, and it will feel great!</p>

<br><br>
<!-- Alphabets Table -->

<table class="table">
  <thead>
    <tr >
      <th>Sound</th>
      <th style="text-align:center;">Letter</th>
      <th style="text-align:center;">Spanish</th>
      <th style="text-align:center;">English</th>
      <th style="text-align:center;">Pronounciation</th>
    </tr>
  </thead>
  <tbody>

    <tr>
    <textarea id="texta" style="display:none;">a </textarea>
      <td id="a"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">A</th>
      <td>a</td> 
      <td>ah</td>
      <td>like the a in &quot;father&quot;</td>
    </tr>

    <tr>
    <textarea id="textb" style="display:none;">b </textarea>
      <td id="b"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">B</th>
      <td>be</td> 
      <td>bay</td>
      <td>like the English b but pronounced very softly</td>
    </tr>

    <tr>
    <textarea id="textc" style="display:none;">c </textarea>
      <td id="c"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">C</th>
      <td>ce</td> 
      <td>say</td>
      <td>before a, o, u, like the c in &quot;can&quot;; before e, i, like the c in &quot;cent&quot;</td>
    </tr>

    <tr>
    <textarea id="textch" style="display:none;">ch</textarea>
      <td id="ch"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">CH</th>
      <td>che</td> 
      <td>chay</td>
      <td>like the ch in &quot;church&quot;</td>
    </tr>

    <tr>
    <textarea id="textd" style="display:none;">d </textarea>
      <td id="d"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">D</th>
      <td>de</td> 
      <td>day</td>
      <td>like d in &quot;bed&quot; but with tongue forward, almost like th in &quot;the&quot;</td>
    </tr>

    <tr>
    <textarea id="texte" style="display:none;">e </textarea>
      <td id="e"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">E</th>
      <td>e</td> 
      <td>ay</td>
      <td>like the ay in &quot;pay&quot;</td>
    </tr>

    <tr>
    <textarea id="textf" style="display:none;">f </textarea>
      <td id="f"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">F</th>
      <td>efe</td> 
      <td>ay-fay</td>
      <td>like the English f</td>
    </tr>

    <tr>
    <textarea id="textg" style="display:none;">g </textarea>
      <td id="g"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">G</th>
      <td>ge</td> 
      <td>hay</td>
      <td>before a, o, u, like g in &quot;get&quot;; before e, i, like an English h</td>
    </tr>

    <tr>
    <textarea id="texth" style="display:none;">h </textarea>
      <td id="h"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">H</th>
      <td>hache</td> 
      <td>ah-chay</td>
      <td>always silent</td>
    </tr>

    <tr>
    <textarea id="texti" style="display:none;">i</textarea>
      <td id="i"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">I</th>
      <td>i</td> 
      <td>ee</td>
      <td>like ee in &quot;feet&quot;</td>
    </tr>

    <tr>
    <textarea id="textj" style="display:none;">j </textarea>
      <td id="j"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">J</th>
      <td>jota</td> 
      <td>hota</td>
      <td>like the English h</td>
    </tr>

    <tr>
    <textarea id="textk" style="display:none;">k </textarea>
      <td id="k"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">K</th>
      <td>ka</td> 
      <td>kah</td>
      <td>like the English k</td>
    </tr>

    <tr>
    <textarea id="textl" style="display:none;">l </textarea>
      <td id="l"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">L</th>
      <td>ele</td> 
      <td>ay-lay</td>
      <td>like the English l</td>
    </tr>

    <tr>
    <textarea id="textll" style="display:none;">ll </textarea>
      <td id="ll"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">LL</th>
      <td>elle</td> 
      <td>ay-yay</td>
      <td>like the y in &quot;yes&quot;</td>
    </tr>

    <tr>
    <textarea id="textm" style="display:none;">m </textarea>
      <td id="m"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">M</th>
      <td>eme</td> 
      <td>ay-may</td>
      <td>like the English m</td>
    </tr>

    <tr>
    <textarea id="textn" style="display:none;">n</textarea>
      <td id="n"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">N</th>
      <td>ene</td> 
      <td>ay-nay</td>
      <td>like the English n</td>
    </tr>

    <tr>
    <textarea id="textñ" style="display:none;">ñ </textarea>
      <td id="ñ"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row"> Ñ</th>
      <td>eñe</td> 
      <td>ay-nyay</td>
      <td>like the ny in &quot;canyon&quot;</td>
    </tr>

    
    <tr>
    <textarea id="texto" style="display:none;">o</textarea>
      <td id="o"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">O</th>
      <td>o</td> 
      <td>oh</td>
      <td>like the o in &quot;no&quot;</td>
    </tr>

    
    <tr>
    <textarea id="textp" style="display:none;">p</textarea>
      <td id="p"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">P</th>
      <td>pe</td> 
      <td>pay</td>
      <td>like the English p</td>
    </tr>

    
    <tr>
    <textarea id="textq" style="display:none;">q</textarea>
      <td id="q"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">Q</th>
      <td>cu</td> 
      <td>koo</td>
      <td>like the English k</td>
    </tr>

    
    <tr>
    <textarea id="textr" style="display:none;">r</textarea>
      <td id="r"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">R</th>
      <td>ere</td> 
      <td>ay-ray</td>
      <td>like the English r but softer, almost sounds like a d</td>
    </tr>

    
    <tr>
    <textarea id="textrr" style="display:none;">rr</textarea>
      <td id="rr"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">RR</th>
      <td>erre</td> 
      <td>ay-rray</td>
      <td>strongly trilled</td>
    </tr>

    
    <tr>
    <textarea id="texts" style="display:none;">s</textarea>
      <td id="s"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">S</th>
      <td>ese</td> 
      <td>ay-say</td>
      <td>like the English s</td>
    </tr>

    
    <tr>
    <textarea id="textt" style="display:none;">t</textarea>
      <td id="t"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">T</th>
      <td>te</td> 
      <td>tay</td>
      <td>like the English t</td>
    </tr>

    <tr>
    <textarea id="textu" style="display:none;">u</textarea>
      <td id="u"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">U</th>
      <td>u</td> 
      <td>oo</td>
      <td>like the oo in &quot;pool&quot;</td>
    </tr>

    <tr>
    <textarea id="textv" style="display:none;">v</textarea>
      <td id="v"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">v</th>
      <td>uve</td> 
      <td>oo-vay</td>
      <td>almost no difference between b and v in Spanish</td>
    </tr>

    <tr>
    <textarea id="textw" style="display:none;">w</textarea>
      <td id="w"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">W</th>
      <td>uve-doble</td> 
      <td>oo-vay d0-blay</td>
      <td>like the English w</td>
    </tr>

    <tr>
    <textarea id="textx" style="display:none;">x</textarea>
      <td id="x"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">X</th>
      <td>equis</td> 
      <td>ay-kees</td>
      <td>like the English x</td>
    </tr>

    <tr>
    <textarea id="texty" style="display:none;">y</textarea>
      <td id="y"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">Y</th>
      <td>ye</td> 
      <td>yay</td>
      <td>like the English y; like ee in &quot;tree&quot; when used alone</td>
    </tr>

    <tr>
    <textarea id="textz" style="display:none;">z</textarea>
      <td id="z"><img src="sound.png"  width="25" height="25"> </td>
      <th scope="row">Z</th>
      <td>zeta</td> 
      <td>say-ta</td>
      <td>like the English s</td>
    </tr>
    
  </tbody>
</table>

<p style="text-align:center; font-size:25px; ">To confuse the issue, some Spanish-language sources consider &quot;rr&quot; a separate letter and others
don&#39;t count the &quot;k&quot; or the &quot;w&quot; since they almost always appear in words that originated outside of the
Spanish language.
So how many letters are there? Officially there are 27, but you may find answers anywhere between
25 (&quot;ñ,&quot; but no &quot;k&quot; or &quot;w&quot;) and 30 (the 26 you&#39;re used to plus &quot;ch,&quot; &quot;ll,&quot; &quot;ñ,&quot; and &quot;rr.&quot;) Just to cover all
the bases let&#39;s work with a 30-letter alphabet.</p>
<br><br><br>
<h3 style="text-align:center; font-size:44px; font-weight:bold;">The Acute Accent in Spanish </h3>
<p style="text-align:center; font-size:25px;">Time to bring out the big guns. The acute accent (é) is by far the most common diacritic in the Spanish language.
 It can appear above all five vowels: á, é, í, ó, ú. At most, it appears once per word.
 Generally, an acute accent is used to denote word stress.<br> If you don't know what that means, let me quickly explain:<br>
 In linguistics, stress is when a particular syllable or syllables in a word are emphasised when speaking. Usually this means
the syllable is pronounced louder and longer than its neighbours.
</p>

</div>
<br><br>

<!-- Articles -->
<a name="articles"></a> 
<div>

<h1 style="text-align:center; font-size:44px; font-weight:bold;">Articles</h1>
<!--  Definite Articles -->
<h3 style="text-align:center; font-size:44px; font-weight:bold;">Definite Article</h3>
<p style="text-align:center; font-size:25px;">In English, there is only one definite article: the. In Spanish, you have
 to choose between four definite articles: el, la, los and las. Which one you choose 
 depends on the noun which follows.<br>
In Spanish, all nouns (including words for things) are either masculine or feminine
  – this is called their gender. And just as in English they can also be either singular
   or plural. You must bear this in mind when deciding which Spanish word to use for the.
   <br><br>
<p>Lets take a look at some nouns</p>
<p> <b>el</b> is used before masculine singular nouns.<br>
    <b>la</b> is used before feminine singular nouns. <br>
    <h3> Example </h3>

<table class="table">
  <tbody>

    <tr>
    <textarea id="textv1" style="display:none;">el niño </textarea>
      <td id="v1"><img src="sound.png"  width="25" height="25"> </td>
      <th >el niño</th>
      <td>the boy</td> 
    </tr>
    <tr>
    <textarea id="textv2" style="display:none;">la niña </textarea>
      <td id="v2"><img src="sound.png"  width="25" height="25"> </td>
      <th >la niña</th>
      <td>the girl</td> 
    </tr>
    </tbody>
</table>
<br><br>
</p>
<p> <b>los</b> is used before masculine plural nouns.<br>
    <b>las</b> is used before feminine plural nouns. <br>
</p>  
<h3> Example </h3>

<table class="table">
  <tbody>

    <tr>
    <textarea id="textv3" style="display:none;">los niños </textarea>
      <td id="v3"><img src="sound.png"  width="25" height="25"> </td>
      <th >los niños</th>
      <td>the boys</td> 
    </tr>
    <tr>
    <textarea id="textv4" style="display:none;">las niñas </textarea>
      <td id="v4"><img src="sound.png"  width="25" height="25"> </td>
      <th >las niñas</th>
      <td>the girls</td> 
    </tr>
    </tbody>
</table>  <br><br>

<!--  InDefinite Articles -->
<h3 style="text-align:center; font-size:44px; font-weight:bold;">Indefinite Article</h3>
<p style="text-align:center; font-size:25px;">In English, the indefinite article is a, which changes to an when it comes before a vowel or a vowel sound,
 for example, an apple. In the plural, we use some or any.
In Spanish, you have to choose between four indefinite articles: un, una, unos and unas. 
Which one you choose depends on the noun that follows..<br>
In Spanish, all nouns (including words for things) are either masculine or feminine – this is called their
 gender. And, just as in English, they can also be either singular or plural. You must bear this in mind when 
 deciding which Spanish word to use for a.
 <br><br>
<p>Lets take a look at some nouns</p>
<p> <b>un</b> is used before masculine singular nouns.<br>
    <b>una</b> is used before feminine singular nouns. <br>
    <h3> Example </h3>

<table class="table">
  <tbody>

    <tr>
    <textarea id="textv5" style="display:none;">un niño </textarea>
      <td id="v5"><img src="sound.png"  width="25" height="25"> </td>
      <th >un niño</th>
      <td>a boy</td> 
    </tr>
    <tr>
    <textarea id="textv6" style="display:none;">una niña </textarea>
      <td id="v6"><img src="sound.png"  width="25" height="25"> </td>
      <th >una niña</th>
      <td>a girl</td> 
    </tr>
    </tbody>
</table><br><br>

</p>
<p> <b>unos</b> is used before masculine plural nouns.<br>
    <b>unas</b> is used before feminine plural nouns. <br>
</p>  
<h3> Example </h3>

<table class="table">
  <tbody>

    <tr>
    <textarea id="textv7" style="display:none;">unos niños </textarea>
      <td id="v7"><img src="sound.png"  width="25" height="25"> </td>
      <th >unos niños</th>
      <td>some boys</td> 
    </tr>
    <tr>
    <textarea id="textv8" style="display:none;">unas niñas </textarea>
      <td id="v8"><img src="sound.png"  width="25" height="25"> </td>
      <th >unas niñas</th>
      <td>some girls</td> 
    </tr>
    </tbody>
</table>  <br><br>
</div>

<!-- Parts Of Speech -->
<a name="pos"></a> 
<div>
<!-- Nouns -->
<h3 style="text-align:center; font-size:44px; font-weight:bold;">Nouns</h3>
<p style="text-align:center; font-size:25px;">Nouns are used to name all sorts of things: people, animals, objects, places, ideas, emotions, feelings, virtues, defects.
Examples of nouns in English: cat, dog, house, river, Richard, Santiago, courage..<br>
Usually nouns that end in -o are masculine and nouns that end in -a are feminine. In addition there are some exceptions too<br>
Refer the articles section in how to use nouns with articles</p>

<div>
 <table class="table" >
  <tbody>

    <tr>

      <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('Vez', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('Vez', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >Vez</th>
      <td>Time</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('Año', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('Año', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> 
      <th >Año</th>
      <td>Year</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  mundo ', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' mundo', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >mundo</th>
      <td>World</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak(' Día', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('  Día', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >  Día</th>
      <td>Day</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak(' Cosa', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' Cosa', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th > Cosa</th>
      <td>Thing</td> 
    </tr>




    </tbody>
</table>
  </div>

  <br><br>
<!-- Pronouns -->
<h3 style="text-align:center; font-size:44px; font-weight:bold;">Pronouns</h3>
<p style="text-align:center; font-size:25px;">A pronoun is a word you use instead of a noun, when you do not need or want to name someone or something directly,
 for example, it, you, none.</p>
 <div>
 <table class="table" >
  <tbody>

    <tr>

      <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('Yo', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('Yo', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >Yo</th>
      <td>I</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('Me', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('Me', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >Me</th>
      <td>Me</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  Esto ', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' Esto', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >Esto </th>
      <td>This</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak(' Eso', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('  Eso', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >  Eso</th>
      <td>That</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak(' Nos Nosotros', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' Nos Nosotros', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th > Nos/Nosotros</th>
      <td>Us/We</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak(' Se', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('Se', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >Se</th>
      <td>Self</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('él  ellos', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('él  ellos', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >él / ellos</th>
      <td>He/Them</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  ella  ellas ', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' ella  ellas ', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >ella / ellas</th>
      <td>She/Them</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  le lo la', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('  le lo la', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >le/lo/la</th>
      <td>[3rd pers. indir. obj. pron.]</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  Usted', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('Usted, 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >  Usted</th>
      <td>You</td> 
    </tr>


    </tbody>
</table>
  </div>
  <br><br>
<!-- Conjuctions -->
<h3 style="text-align:center; font-size:44px; font-weight:bold;">Conjuctions</h3>
<p style="text-align:center; font-size:25px;">A conjunction is a word such as and, but, or, so, if and because, that links two words or phrases of a similar type, or two 
parts of a sentence, for example, Diane and I have been friends for years.; I left because I was bored.</p>
<div>

<table class="table" >
  <tbody>

    <tr>

      <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('que', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('que', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >Que</th>
      <td>that, which</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('y', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('y', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >y</th>
      <td>And</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  como ', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('  como ', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >como </th>
      <td>like, as</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  pero', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('  pero', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >  pero</th>
      <td>but, yet, except</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  o', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' o', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >  o</th>
      <td>or</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak(' si', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('si', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >si</th>
      <td>if</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('ni', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('ni', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >ni</th>
      <td>not even, neither, nor</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  porque ', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' porque ', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >porque </th>
      <td>because</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  mientras', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('  mientras', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th > mientras</th>
      <td>while, whereas; as long as</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  sino', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' sino, 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >  sino</th>
      <td>but, except, rather</td> 
    </tr>


    </tbody>
</table>
  </div>
  <br><br>
<!-- Prepositions -->
<h3 style="text-align:center; font-size:44px; font-weight:bold;">Preposition</h3>
<p style="text-align:center; font-size:25px;">A preposition is a word such as at, for, with, into or from, which is usually followed by a noun, pronoun or, in English, 
a word ending in -ing. Prepositions show how people and things relate to the rest of the sentence, for example, She’s at home.;
 a tool for cutting grass; It’s from David.</p>
 <div>

<table class="table" >
  <tbody>

    <tr>

      <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('de', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('de', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >de</th>
      <td>of, from</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('a', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('a', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >a</th>
      <td>to,at</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  en ', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('  en', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >en </th>
      <td>in</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak(' por ', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('  por ', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th > por </th>
      <td>for, by, through</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  con', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('con', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th > con</th>
      <td>with</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak(' sin ', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('sin ', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >sin </th>
      <td>without</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('para', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('para', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >para</th>
      <td>for, to, in order to</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  sobre ', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' sobre ', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >sobre </th>
      <td>on top of, over, about</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  hasta', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak('  hasta', 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >hasta</th>
      <td>until, up to, even (adv.)</td> 
    </tr>

    <td class="f"><input src="sound.png" onclick="responsiveVoice.speak('  desde', 'Spanish Female',{rate: 1.0});" type="image" class="ib"> 
      <input src="snail.png" onclick="responsiveVoice.speak(' desde, 'Spanish Female',{rate: 0.5});" type="image" class="ib"> </td>
      <th >  desde</th>
      <td> from, since</td> 
    </tr>


    </tbody>
</table>
 
</div>  <a name="quiz"></a> 
<hr><br><br><br><br><a name="quiz"></a> 
<a href="quiz.php" class="quizbtn">Play Quiz </a>
<p style="text-align:center; font-weight:bold;">Take the Quiz and See where you stand in this Chapter <br> And keep progressing by learn from Mistakes  </p>

  </div>
</div>

<div class="grid">
  <div class="grid__col--12">
    <textarea id="text" style="display:none;">Yo escribí la carta esta mañana </textarea>

    <p>
      <button id="playbutton" style="display:none;">Play</button>
      
    </p>
  </div>
    <div class="grid__col--12">
    <textarea id="tex" style="display:none;">Buenos dias </textarea>

    <p>
      <button id="playbutton1" style="display:none;">Play</button>
      
    </p>
	
	
  </div>


  </div> 
</div>
  <script src='http://code.responsivevoice.org/responsivevoice.js'></script>

  

    <script  src="spanish_basic.js"></script>


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