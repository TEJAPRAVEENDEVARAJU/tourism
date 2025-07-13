
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
    <h1 style="color:yellow;font-size:105px;font-family:agency fb">Sign Up</h1>
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

<img src="images/log2.jpg" class="log3">
	<div class="signup-form" style="padding-top: 43px;font-size:30px;padding-left:20px;text-align:center">
    <form action="?=$_SERVER['PHP_SELF'];?" method="post">
      <div class="form-group">
        <label for="fname">First Name: </label>
        <input type="text" id="fname" placeholder="first name..." name="fname" required>
      </div><br>
      <div class="form-group">
        <label for="lname">Last Name: </label>
        <input type="text" id="lname" placeholder="last name..." name="lname" required>
      </div><br>
      <div class="form-group">
        <label for="email">Email: </label>
        <input type="email" id="email" placeholder="email@gmail.com" name="email" size="35" required>
      </div><br>
      <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" id="password" placeholder="*******" name="password" required>
      </div><br>
    <div class="form-group">
           <label for="repassword">Re-Enter Password : </label>
           <input type="password" id="repassword" placeholder="*******" name="repassword" required>
           </div><br> 
      <div class="form-group">
        <label for="phno">Phone Number:</label>
        <input type="tel" id="phno" placeholder="0****9" name="phnumber" required>
      </div><br>
      <div class="form-group">
        <button class="glow-on-login"  type="submit" name="signup"  class="btn btn-success" style="font-size:30px;background-color:black;color:white;padding:10px" >SIGN UP</button>
      </div>
    </form>
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

  $connection = mysqli_connect('localhost',' root','','tourism');
  if(!$connection)
  {
    alert("not connect");
  }
  if(isset($_POST['signup'])){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $repassword = $_POST['repassword'];
   $phnumber = $_POST['phnumber'];
   //$user_id = $_POST['user_id'];


   //$_SESSION['user_id'] = $user_id;
   $_SESSION['firstname'] =  $fname;
   $_SESSION['lastname'] = $lname;
   $_SESSION['email'] = $email;
   $_SESSION['passwords'] = $password;
   $_SESSION['repasswords'] = $repassword;
   $_SESSION['phonenumber'] = $phnumber;



   $request = "insert into signup(fname,lname,email,password,repassword,phnumber)
                       values ('$fname','$lname','$email','$password','$repassword','$phnumber')";
    
   mysqli_query($connection,$request);
   echo  '<script type="text/javascript">';
   echo 'alert("DATA SAVED")';
   echo '</script>';

   header('location:login.php');
}
 // else{
  //   echo  '<script type="text/javascript">';
  //   echo 'alert("Something Went Wrong Plz... Try Again")';
  //   echo '</script>';
  //   }
?>


</body>
</html>





