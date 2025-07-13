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
    <title>Gallary</title>
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
        <a href="home.php">Home</a>
        <a href="book.php"">Book</a>
        <a href="packages.php"">Packages</a>
        <!--<a href="#services">Services</a>-->
        <a href="gallary.php">Gallery</a>
       <!-- <a href="#review">Review</a>-->
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


<!-- gallery section starts  -->
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>


<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.webp" alt="">
            <div class="content">
                <h3>Rollapadu WildLife Sanctuary</h3>
                <p>A wildlife sanctuary spread across an area of 614sq kms in the Kurnool district of Andhra Pradesh.</p>
                <a href="https://en.wikipedia.org/wiki/Rollapadu_Wildlife_Sanctuary" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>Amaravati</h3>
                <p>Amaravati was a seat of Buddhism prior to the rise of Satavahanas. </p>
<a href="https://en.wikipedia.org/wiki/Amaravati" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.webp" alt="">
            <div class="content">
                <h3>Lepakhi Temple</h3>
                <p>The Lepakshi temple, also known as Veerbhadra temple is located in the tiny hamlet of Anantapur District of Andhra Pradesh.</p>
                <a href="https://en.wikipedia.org/wiki/Veerabhadra_Temple,_Lepakshi" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>Undavalli Caves</h3>
                <p>The Undavalli Caves, a monolithic example of Indian rock-cut architecture and is located in Mangalagiri(Guntur).</p>
                <a href="https://en.wikipedia.org/wiki/Undavalli_Caves" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>Tirupati</h3>
                <p>Sri Venkateswara Swami Vaari Temple is a Hindu temple situated in the hill town of Tirumala at Tirupati.</p>
                <a href="https://en.wikipedia.org/wiki/Tirupati" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>Araku Valley</h3>
                <p>Absolutely! Araku Valley is a stunningly beautiful destination that's worth the road trip from Vizag.</p>
                <a href="https://en.wikipedia.org/wiki/Araku_Valley" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>Gandikota</h3>
                <p>Gandikota is a historic village which is characterized by its own fort, situated on the right bank of the River Penna.</p>
                <a href="https://en.wikipedia.org/wiki/Gandikota" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>Borra Caves</h3>
                <p>The Borra Caves are located on the East Coast of India, in the Ananthagiri hills of the Araku Valley.</p>
                <a href="https://en.wikipedia.org/wiki/Borra_Caves" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>Uppalapadu Bird Sanctuary</h3>
                <p>This  Bird Sanctuary is located in Guntur.Birds  from places  use village water tanks for nesting.</p>
                <a href="https://en.wikipedia.org/wiki/Uppalapadu_Bird_Sanctuary" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-10.webp" alt="">
            <div class="content">
                <h3>Srikalahasti</h3>
                <p>Srikalahasti Temple is located in the town of Srikalahasti, AP. It is one of the most famous Shiva temples in South India.</p>
                <a href="https://en.wikipedia.org/wiki/Srikalahasti" class="btn">see more</a>
            </div>
        </div>
<div class="box">
            <img src="images/g-11.jpg" alt="">
            <div class="content">
                <h3>Horsley Hills</h3>
                <p>Horsley Hills or Horsleykonda or Yenugulla Mallamma Konda is a series of hills in Andhra Pradesh in Madanapalle Taluka of Annamayya district.</p>
                <a href="https://en.wikipedia.org/wiki/Horsley_Hills" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-12.webp" alt="">
            <div class="content">
                <h3>Belum Caves</h3>
                <p>The Belum Caves, located in Nandyala district of Andhra Pradesh's Rayalaseema region, is the second largest cave system on the Indian subcontinent.</p>
                <a href="https://en.wikipedia.org/wiki/Belum_Caves" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-13.webp" alt="">
            <div class="content">
                <h3>Puttaparthi</h3>
                <p>The beautiful town of Puttaparthi is situated on the banks of Chitravathi River, in the Anantapur District in Andhra Pradesh.</p>
                <a href="https://en.wikipedia.org/wiki/Puttaparthi" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-14.jpg" alt="">
            <div class="content">
                <h3>Coringa WildLife Sanctuary</h3>
                <p>One of the most preferred places to visit in Andhra Pradesh is  Coringa Wildlife Sanctuary.</p>
                <a href="https://en.wikipedia.org/wiki/Coringa_Wildlife_Sanctuary" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-15.jpg" alt="">
            <div class="content">
                <h3>Nagarjunakonda</h3>
                <p>Nagarjunakonda is a historical town, now an island located near Nagarjuna Sagar in Palnadu district of the Indian state of Andhra Pradesh.</p>
                <a href="https://en.wikipedia.org/wiki/Nagarjunakonda" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-16.jpeg" alt="">
            <div class="content">
                <h3>Ethipothala Falls</h3>
                <p>Ethipothala falls is formed from a tributary of river Krishna – Chandravakna river and is 70 ft high.</p>
                <a href="https://en.wikipedia.org/wiki/Ethipothala_Falls" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-17.jpg" alt="">
            <div class="content">
                <h3>Katiki Waterfall</h3>
                <p>Katiki waterfall is one of the most popular waterfalls in Vizag, Andhra Pradesh.The waterfall lies near Borra caves.</p>
                <a href="https://en.wikipedia.org/wiki/Katiki_Waterfalls" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-18.jpg" alt="">
            <div class="content">
                <h3>Talakona WaterFalls</h3>
                <p>Talakona waterfall is in Sri Venkateswara National Park, Tirupati district of Andhra Pradesh.</p>
                <a href="https://en.wikipedia.org/wiki/Talakona" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-19.jpg" alt="">
            <div class="content">
                <h3>INS Kursura Submarine Museum</h3>
                <p>The INS Kurusura submarine museum at RK beach is the first submarine  museum in Asia.</p>
                <a href="https://en.wikipedia.org/wiki/INS_Kursura_(S20)" class="btn">see more</a>
            </div>
        </div>

<div class="box">
            <img src="images/g-20.jpg" alt="">
            <div class="content">
                <h3>Sri Venkateswara Museum</h3>
                <p>The SV Museum is a good place to understand the history & architecture of  Tirumala temple.</p>
                <a href="https://en.wikipedia.org/wiki/Tirumala" class="btn">see more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->


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