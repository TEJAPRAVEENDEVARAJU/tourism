<?php
session_start();
if(!isset($_SESSION['email'])){
        header("location: index.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
<!-- custom css file link  -->
         <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="signupcss.css"
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);
 
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
/*  
    body {
      font-weight: 300;
      font-size: 12px;
      line-height: 30px;
      color: #272727;
      background: rgb(25, 199, 155);
    } */
 
    .container {
      max-width: 400px;
      width: 100%;
      margin: 0 auto;
      position: relative;
    }
 
    #contact input {
      font: 400 12px/16px;
      width: 100%;
      border: 1px solid #CCC;
      background: #FFF;
      margin: 10 5px;
      padding: 10px;
    }
 
    h1 {
      margin-bottom: 30px;
      font-size: 30px;
    }
 
    #contact {
      background: #F9F9F9;
      padding: 25px;
      margin: 50px 0;
    }
 
 
    fieldset {
      border: medium none !important;
      margin: 0 0 10px;
      min-width: 100%;
      padding: 0;
      width: 100%;
    }
 
    textarea {
      height: 100px;
      max-width: 100%;
      resize: none;
      width: 100%;
    }
 
    button {
      cursor: pointer;
      width: 100%;
      border: none;
      background: rgb(17, 146, 60);
      color: #FFF;
      margin: 0 0 5px;
      padding: 10px;
      font-size: 20px;
    }
 
    button:hover {
      background-color: rgb(15, 95, 42);
    }
    i{
        display: inline;
        display: flex;
        justify-content:space-around;
    }
  </style>
</head>
<body>
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>
    <button class="logos"><a href="home.php" class="logo" style="font-family:richard">
    <span  style="color:red">T</span>ravel<span  style="font-family:magneto;color:rgb(54, 211, 255)">AP</span></a></button>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="book.php">Book</a>
        <a href="packages.php">Packages</a>
        <!--<a href="#services">Services</a>-->
        <a href="gallary.php">Gallery</a>
        <!--<a href="#review">Review</a>-->
        <a href="contact.php">Contact</a>
    </nav>

     <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="images/logimage.png" alt="">
        </div>

        <div class="menu">
        
            <h3>
               <?php
                    echo ($_SESSION['email']);
                 ?>
            </h3>
            <ul>
                <li>
                    <!--<span class="material-icons icons-size">person</span>-->
                    <a href="profile.php">My Profile</a>
                </li>
                <li>
                    <!--<span class="material-icons icons-size">insert_comment</span>-->
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
       <img src="images/moon.png" id="icon">

</header>
<!-- header section ends -->

<!-- contact section starts  -->
<br><br><br><br>
<br><br><br><br>
<br>

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="" width="500px" height="600px">
        </div>

        <div class="container" >
    <form id="contact" action="email.php" method="post" style="background-color:red">
      <h1>Contact Form</h1>
 
      <fieldset>
        <input placeholder="Your name" name="name" type="text" tabindex="1" autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Your Email Address" name="email" type="email" tabindex="2">
      </fieldset>
      <fieldset>
        <input placeholder="Type your subject line" type="text" name="subject" tabindex="4">
      </fieldset>
      <fieldset>
        <textarea name="message" placeholder="Type your Message Details Here..." tabindex="5"></textarea>
      </fieldset>
 
      <fieldset>
        <button type="submit" name="send" id="contact-submit">Submit Now</button>
      </fieldset>
    </form>
  </div>

    </div>
    
</section>

<!-- contact section ends -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>

<p>This  website helps you avoid journey-related hassles and issues. Be it one to find tickets and more.</p>
        </div>
        <i>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Hyderabad</a>
            <a href="#">Banglore</a>
            <a href="#">Chennai</a>
            <a href="#">Vijayawada</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>
</i>
</section>
<script>document.querySelector('#icon').onclick = function() { 
          var element = document.body;
	element.classList.toggle("dark-mode");
	if(element.classList.contains("dark-mode")){
	         icon.src = "images/sun.png";
		}else{
			icon.src = "images/moon.png";
			}
}</script>
<script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>


</body>
</html>