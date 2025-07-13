<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
<!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <h1 style="color:yellow;font-size:105px;font-family:agency fb">Bookings</h1>
    <img src="images/moon.png" id="icon">
   
</header>

<!-- header section ends -->
<br></br><br></br>
<br></br><br></br>
<br></br><br></br>
<br></br>

<img src="images/book.png" class="log2">
<?php
require('stripe-php-master/init.php');

$publishableKey=
"pk_test_51OH5rmSJwcMuKnNeUOhqj2SwGB5WRjVzlS9Enm36InKKZ0CTSIaECeybc0sVaHAD1yUJG2njNW9r9GblMjJvsXse00wgZWvkE2";

$secretKey=
"sk_test_51OH5rmSJwcMuKnNeyI9GG0BXV274NLhIa92ZXlpJr8ZGyeCywB7Sn0pGvxwlQnRMGZ0zBFUd6oICtq9HeB1gFWJK00S19kAaDo";

\Stripe\Stripe::setApiKey($secretKey);
?>


 <div class="signup-form" style="padding-top: 43px;font-size:30px;padding-left:20px;text-align:center">
 <form action="bookings1.php" method="post" >
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount=""
		data-name="Travel Andhra"
		data-description="Per Head 3000/- and GST 18%(Have A Nice Trip)"
		data-image="https://w7.pngwing.com/pngs/430/628/png-transparent-booking-com-full-logo-tech-companies-thumbnail.png"
		data-currency="inr"
		data-email="tejapraveen2003@gmail.com"
	>
	</script>

</form>
</div>
<!-- <div class="signup-form" style="padding-top: 43px;font-size:30px;padding-left:20px;text-align:center">
        <h1 style="color:green;font-family:lucida"> Booking SuccessFull !! </h1><br><br>
        <h3 style="padding-right:250px;font-family:maiandra gd">Download Your Receipt :  </h3>
       <button class="btn" onclick="receipt()"><i class="fa fa-download"></i> Download </button>
 </div> -->
<script>document.querySelector('#icon').onclick = function() { 
          var element = document.body;
	element.classList.toggle("dark-mode");
	if(element.classList.contains("dark-mode")){
	         icon.src = "images/sun.png";
		}else{
			icon.src = "images/moon.png";
			}
}</script>

<script type="text/javascript">
      function receipt()
      {
           window.location.href = "pdf.php";
       }
</script>

</body>
</html>






