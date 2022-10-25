<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Contact.css">
    <!-- <script src="./app.js"></script> -->
    <!-- <script src="./Button.js"></script> -->
    <link rel="shortcut icon" href="../Foto/Silhouettes3.png">
    <title>Contact</title>
</head>
<body>
        <!-- <header class="header">
            <nav class="navbar">
    
                <div class="logo">
                  <a href="./index.html">
                    <img src="../Foto/Silhouettes3.png" alt="" >
                  </a>
                </div>
    
                <div class="button2">
                  <button class="button-85" role="button">
                      <a href="../HTML/About.html">Back</a>
                  </button>
              </div>
    </header> -->

    <header class="header">
    <nav class="navbar">

      <div class="logo">
        <a href="../HTML/index.html">
          <img src="../Foto/Silhouettes3.png" alt="">
        </a>
      </div>


      <ul class="nav-menu">
        <li class="nav-item">
          <a href="../HTML/index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="../HTML/Experience.html" class="nav-link">Experience</a>
        </li>
        <li class="nav-item">
          <a href="../HTML/projects.html" class="nav-link">Projects</a>
        </li>
        <li class="nav-item">
          <a href="../HTML/About.html" class="nav-link">About</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>
    
        <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Animated Contact Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="inner">
	<div class="box">
		<form  method="POST" action="contactform.php" class="contact-form" autocomplete="off">
			<h2>Contact Me</h2>
			<div class="inputBox">
				<input type="text" name="name" required="required">
				<span>Name</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="text" name="lastname" required="required">
				<span>Lastname</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" name="mail" required="required">
				<span>E-mail</span>
				<i></i>
			</div>
            <br>
            <textarea id="subject" name="message" placeholder="Write something.." 
                style="height:100px"></textarea>
			<input type="submit" name="submit" value="Contact">
            
		</form>
	</div>
</div>
</body>
</html>
<script src="../Javascript/hamburgermenu.js"></script>      
</body>
</html>