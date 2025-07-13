<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="signupcss.css">
</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>
    <button class="logos"><a href="index.php" class="logo" style="font-family:richard;font-size:125%">
    <span  style="color:red">T</span>ravel<span  style="font-family:magneto;color:rgb(54, 211, 255)">AP</span></a></button>
    <h1 style="color:yellow;font-size:105px;font-family:agency fb">Log In</h1>
    <img src="images/moon.png" id="icon">
   <!-- <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="book.html" target="_blank">Book</a>
        <a href="packages.html" target="_blank">Packages</a>
        <a href="#services">Services</a>
        <a href="gallary.html" target="_blank">Gallery</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn" ></i>
    </div>

    <form action="https://www.google.com/search" method="get" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
-->
</header>

<!-- header section ends -->
<br></br><br></br>
<br></br><br></br>
<br></br><br></br>
<br></br>
<img src="images/log1.jpg" class="log1" style="float: left;padding-top:5px" height="600px">
<div class="login" style="padding-top:100px;padding-left:300px">
<span class="form" style="font-size:30px;padding-left:120px;">
                       <form action="?=$_SERVER['PHP_SELF'];?" method="post">
                               <label for="email">Email</label><br>
                            <input type="email" id="email" name="email" placeholder=" Email....." size="35" autocomplete="on" required/><br><br>
                              Password <br>
                       <input type="password" id="password" name="password" placeholder="********" size="25" required/><br><br>
                 <input type="checkbox" id="c1"><b><span class="c1"> Remember me</span></b><br><br>
                    <button class="glow-on-hover" type="button"> <a href="signup.php" target="_blank"  style="font-size:20px">Create Account</a></button>
                       <span class="login" style="padding-left:120px">
                      <button   type="submit" name="login"  class="glow-on-login"  class="btn btn-success" style="font-size:30px;background-color:black;color:white;padding:10px" >Log In</button>
                       </span>
                      </form>
</span>
</div>

<script>document.querySelector('#icon').onclick = function() { 
          var element = document.body;
	element.classList.toggle("dark-mode");
	if(element.classList.contains("dark-mode")){
	         icon.src = "images/sun.png";
		}else{
			icon.src = "images/moon.png";
			}
}</script>

<?php

session_start();
  include("database.php");

 if(isset($_POST['login']))
 {
        $email = $_POST['email'];
        $password = $_POST['password'];
         $query = "SELECT * FROM signup WHERE email = '$email' && password = '$password' ";
         $data = mysqli_query($conn,$query);
         $total = mysqli_num_rows($data);
        if($total > 0)
       {
            while($row = mysqli_fetch_assoc($data)){
             session_start();
             $_SESSION['email'] = $email;
              header('location:home.php');
              }
        }
         else
         {
                 echo '<script type="text/javascript">';
                  echo 'alert("Invalid Email or Password");';
                 echo '</script>';
           }
 }
?>
</body>

</html>
