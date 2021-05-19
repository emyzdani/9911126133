<html>

<head>
	<title> Mostafa Yazdani </title>
	<link href = "style.css" rel = "stylesheet" type = "text/css" >
</head>

<body>
	<div class = "title">
		<h2 > Mostafa Yazdani </h2>
		<h3> Front-End Developer </h3>
		<img src="1.png" />
	</div>
	
	<div>
		<p class = "title"> Biography: </p>
		<p> I like working with computer. I love coding.<br>
		I learned HTML and CSS when a was 17 years old.<br>
		I am learning C++ in this days... <br>    </p>
	</div>
	
	<div>
		<p class = "title"> Education: </p>
		<p> Computer Engineering student<br> at <a href = "https://semnan.ac.ir/">Semnan University</a> <br>I learned HTML and CSS at
		<a href = "https://toplearn.com">toplearn.com </a> 
		</p>
	</div>
	
	<div>
		<p class = "title"> Skils: </p>
		<ul>
			<li>HTML</li>
			<li>CSS</li>
			<li>Javascript</li>
			<li>Jquery</li>
			<li>Bootstrap4</li>
			<li>Flexbox</li>
			<li>sass</li>
			<li>photoshop</li>
			<li>illustrator</li>
			<li>UI/UX</li>
		</ul>
	</div>
	
	<div>
		<p class = "title"> contact: </p>
		<a href = "mailto:mostafa,ya79@gmail.com">Email me! </a>
		<p>My phone number: 09212680516 </p>
		<a href = "https://www.instagram.com/mostafayazdani14/" > <img class = "logo" src = "instagram.jfif"> </a>
	</div>
	
	<?php
		$comment = "";
	?>
		<form method="post" >
			Name: <input type="text" name="name">
			<br><br>
			E-mail: <input type="text" name="email">
			<br><br>
			Comment: <textarea name="comment" rows="5" cols="40"></textarea>
			<br><br>
			<input type="submit" name="submit">
		</form>
	<?php
		$comment = test_input($_POST["comment"]);
		$myfile = fopen("newfile.txt", "x");
		fwrite($myfile, $comment);
		
	?>
	
	
	
	
</body>
	
</html>