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
    <title>Packages</title>
<!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>
    <button class="logos"><a href="home.php" class="logo" style="font-family:richard">
    <span  style="color:red">T</span>ravel<span  style="font-family:magneto;color:rgb(54, 211, 255)">AP</span></a></button>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="book.php" target="_blank">Book</a>
        <a href="packages.php">Packages</a>
        <!--<a href="#services">Services</a>-->
        <a href="gallary.php" target="_blank">Gallery</a>
        <!--<a href="#review">Review</a>-->
        <a href="#contact">Contact</a>
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

<!-- packages section starts  -->
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<section class="packages" id="packages">
<h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/p-1.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Rollapadu WildLife Sanctuary</h3>
                <p> A wildlife sanctuary spread across an area of 614sq kms in the Kurnool district of Andhra Pradesh, Rollapadu offers its visitors a journey into the wild.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 3750.00</span></div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Araku Valley </h3>
                <p>Absolutely! Araku Valley is a stunningly beautiful destination that's worth the road trip from Vizag.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 4999.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tirupati </h3>
                <p>Sri Venkateswara Swami Vaari Temple is a Hindu temple situated in the hill town of Tirumala at Tirupati.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 3999.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Gandikota </h3>
                <p>Gandikota is a historic village which is characterized by its own fort, situated on the right bank of the River Penna.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 3900.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Amaravati </h3>
                <p>Amaravati was a seat of Buddhism prior to the rise of Satavahanas. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 4500.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Borra Caves </h3>
                <p>The Borra Caves are located on the East Coast of India, in the Ananthagiri hills of the Araku Valley.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 4000.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

 <div class="box">
            <img src="images/p-7.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Undavalli Caves </h3>
                <p>The Undavalli Caves, a monolithic example of Indian rock-cut architecture and one of the finest testimonials to ancient viswakarma sthapathis, are located in Mangalagiri(Guntur).</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 2000.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

 <div class="box">
            <img src="images/p-8.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Lepakshi Temple </h3>
                <p>The Lepakshi temple, also known as Veerbhadra temple is located in the tiny hamlet of Anantapur District of Andhra Pradesh.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 2000.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>


 <div class="box">
            <img src="images/p-9.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Uppalapadu Bird Sanctuary </h3>
                <p>The Uppalapadu Bird Sanctuary is located in Uppalapadu(Guntur).Birds that migrate from places like Siberia and Australia use village water tanks for nesting.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 4000.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-10.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Srikalahasti </h3>
                <p>Srikalahasti Temple is located in the town of Srikalahasti, AP. It is one of the most famous Shiva temples in South India.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 3500.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-11.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Horsley Hills </h3>
                <p>Horsley Hills or Horsleykonda or Yenugulla Mallamma Konda is a series of hills in Andhra Pradesh in Madanapalle Taluka of Annamayya district.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 3500.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-12.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Belum Caves </h3>
                <p>The Belum Caves, located in Nandyala district of Andhra Pradesh's Rayalaseema region, is the second largest cave system on the Indian subcontinent.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 4000.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-13.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Puttaparthi </h3>
                <p>The beautiful town of Puttaparthi is situated on the banks of Chitravathi River, in the Anantapur District in Andhra Pradesh.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 3500.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-14.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Coringa WildLife Sanctuary </h3>
                <p>One of the most preferred places to visit in Andhra Pradesh among the eco-tourists is  Coringa Wildlife Sanctuary.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 3800.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-15.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Nagarjunakonda </h3>
                <p>Nagarjunakonda is a historical town, now an island located near Nagarjuna Sagar in Palnadu district of the Indian state of Andhra Pradesh.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 3550.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-16.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Ethipothala Falls – Nature’s Retreat </h3>
                <p>Ethipothala falls is formed from a tributary of river Krishna – Chandravakna river and is 70 ft high.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 4000.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-17.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Katiki Waterfall </h3>
                <p>Katiki waterfall is one of the most popular waterfalls in Vizag, Andhra Pradesh.The waterfall lies near Borra caves.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 300.00 <span>Rs. 4000.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-18.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Talakona WaterFalls </h3>
                <p>Talakona waterfall is in Sri Venkateswara National Park, Tirupati district of Andhra Pradesh.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 4500.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-19.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> INS Kursura Submarine Museum </h3>
                <p>The INS Kurusura submarine museum at RK beach is the first submarine turned into a museum in the whole of Asia and second in the world.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 6000.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-20.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Sri Venkateswara Museum </h3>
                <p>Sri Venkateswara Museum is a good place to understand the history and architecture of the Tirumala temple.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div><br>
	<b><h1 style="font-size: 20px">---------------->  3 Day Trip   <------------------</h1></b>
                <div class="price"> Rs. 3000.00 <span>Rs. 4000.00</span> </div>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>

<p>This  website helps you avoid journey-related hassles and issues. Be it one to find tickets and more.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Hyderabad</a>
            <a href="#">Banglore</a>
            <a href="#">Chennai</a>
            <a href="#">Vijayawada</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php">home</a>
            <a href="book.php">book</a>
            <a href="packages.php">packages</a>
            <!-- <a href="#">services</a> -->
            <a href="gallary.php">gallery</a>
            <a href="#">review</a>
            <a href="contact.php">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/irshad.shaik.9404362?mibextid=ZbWKwL">facebook</a>
            <a href="https://www.instagram.com/invites/contact/?i=rntssp3jbv1z&utm_content=97vwi0l">instagram</a>
            <a href="#">twitter</a>
            <a href="https://www.linkedin.com/in/shaik-irshad-b41405232?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">linkedin</a>
        </div>
    </div>

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