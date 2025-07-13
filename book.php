<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
<!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="signupcss.css">
</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>
    <button class="logos"><a href="#" class="logo" style="font-family:richard;font-size:125%">
    <span  style="color:red">T</span>ravel<span  style="font-family:magneto;color:rgb(54, 211, 255)">AP</span></a></button>
    <h1 style="color:yellow;font-size:105px;font-family:agency fb">Booking</h1>
    <img src="images/moon.png" id="icon">
   
</header>

<!-- header section ends -->
<br></br><br></br>
<br></br><br></br>
<br></br><br></br>
<br></br>

<img src="images/book.png" class="log2">

<div class="signup-form" style="padding-top: 43px;font-size:30px;padding-left:20px;text-align:center">
    <form action="?=$_SERVER['PHP_SELF'];?" method="post">
      <br><br>
      <div class="form-group">
        <label for="places">Where  To : </label>
        <input list="place" id="places" placeholder="place name" name="places" size="30"required>
	<datalist id="place" ><b>
		<option value="Rollapadu WildLife Sanctuary"><option value="Araku Valley"><option value="Tirupati"><option value="Gandikota">
		<option value="Amaravati"><option value="Borra Caves">
		<option value="Undavalli Caves"><option value="Lepakshi Temple">
		<option value="Uppalapadu Bird Sanctuary"><option value="Srikalahasti">
		<option value="Horsley Hills"><option value="Belum Caves">
		<option value="Puttaparthi"><option value="Coringa WildLife Sanctuary">
		<option value="Nagarjunakonda"><option value="Ethipothala Falls">
		<option value="Katiki Waterfall"><option value="Talakona WaterFalls">
		<option value="INS Kursura Submarine Museum"><option value="Sri Venkateswara Museum"></b></datalist>
      </div><br>
    <div class="form-group">
           <label for="guests">Number Of Guests : </label>
           <input type="number" id="guests" placeholder="count" name="guests" min="1" required>
           </div><br> 
      <div class="form-group">
        <label for="date">Arrivals : </label>
        <input type="date" id="date"  name="date" min="2023-11-23" max="2025-12-31" required>
      </div><br>
      <div class="form-group">
        <button class="glow-on-login"  type="submit" name="book"  class="btn btn-success"style="font-size:30px;background-color:black;color:white;padding:10px"  >BOOK NOW</button>
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
  $email = $_SESSION['email'];
  if(isset($_POST['book']))
  {

   $places = $_POST['places'];
   $guests = $_POST['guests'];
   $date = $_POST['date'];
   

   $request = "insert into bookings(places,guests,date,email)
                       values ('$places','$guests','$date','$email')";
    
   mysqli_query($connection,$request);
    $query = "SELECT * FROM bookings WHERE places = '$places' && guests = '$guests' && date = '$date' ";
    $data = mysqli_query($connection,$query);
    $total = mysqli_num_rows($data);
   if($total == 1)
   {
         echo '<script type="text/javascript">window.location.href="bookings.php";</script>';
   }
   
  }
// else{
//   echo  '<script type="text/javascript">';
//   echo 'alert("Something Went Wrong Plz... Try Again");';
//   echo '</script>';
// }
?>

</body>
</html>






