<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
    <button class="logos"><a href="home.php" class="logo" style="font-family:richard;font-size:125%">
    <span  style="color:red">T</span>ravel<span  style="font-family:magneto;color:rgb(54, 211, 255)">AP</span></a></button>
    <h1 style="color:yellow;font-size:105px;font-family:agency fb">Profile</h1>
    <img src="images/moon.png" id="icon">
  
</header>

<!-- header section ends -->
<br></br><br></br>
<br></br><br></br>
<br></br><br></br>
<br></br>

<img src="images/profile.webp" class="log3">
<?php
  session_start();
 include('database.php');
  $email = $_SESSION['email'];
$query = "select * from signup where email = '$email' ";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$fname = $row[0];
$lname = $row[1];
$email = $row[2];
// $password = $row[3];
$phnumber = $row[5];
?>

<div class = "profile" style="padding-top: 43px;font-size:20px;padding-left:20px;text-align:center">
  <h1>Hello !! </h1>
  <h2 style="color:orange;font-family:algerian;padding-right:0px"><?php echo $fname.' '.$lname; ?></h2>
</div>

<div class = "profile" style="padding-top: 1px;font-size:20px;padding-right:100px;text-align:right">
  <h2>Your Email is ! </h2>
  <h2 style="color:orange;font-family:algerian;padding-right:0px"><?php echo $email; ?></h2>
</div>

<!-- <div class = "profile" style="padding-top: 0px;font-size:30px;padding-left:0px;text-align:left">
  <h2>Your Password <img src="images/silent.png" style="width:70px;height:70px;border-radius:50px;padding-top:2px"> </h>
  <h2 style="color:orange;font-family:algerian;padding-right:0px"><?php echo $password; ?></h2>
</div> -->

<div class = "profile" style="padding-top: 1px;font-size:20px;padding-right:80px;text-align:right">
  <h2><img src="images/phone.png" style="width:40px;height:40px;border-radius:50px;padding-top:0px">Your PhoneNumber</h2>
  <h2 style="color:orange;font-family:algerian;padding-right:0px"><?php echo $phnumber; ?></h2>
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

</body>
</html>




