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
    <title>Travel Andhra</title>
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
        <a href="book.php" >Book</a>
        <a href="packages.php" >Packages</a>
        <!--<a href="#services">Services</a>-->
        <a href="gallary.php" >Gallery</a>
        <a href="#review">Review</a>
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

<!-- login form container

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
       <center><img src="images/log.jpeg" width="100px" height="90px"></center>
        <h3 style="color:red">Sign In</h3>
        <input type="email" class="box" placeholder="Enter Email....">
        <input type="password" class="box" placeholder="Enter password....">
        <input type="submit" value="login" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember"><b>Remember me</b></label>
        <b><p>Forget password? <a href="#" style="color:green">Click Here</a></p></b>
        <b><p>Don't have an account? <a href="signup.html" target="_blank">Sign Up</a></p></b>
    </form>

</div>-->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3 style="color:black">Travelling is worthwhile</h3>
        <p>dicover new places with us, Travel awaits</p>
        <a href="packages.php" target="_blank" class="btn">Explore Places</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/book.png" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>Where To</h3>
                <input type="text" placeholder="Place name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="Number of Guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <!--<div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>-->
            <a href="book.php" class="btn" target="_blank">Book Now</a>
        </form>

    </div>

</section>

<!-- book section ends -->

<!-- packages section starts  -->

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
                <p> A wildlife sanctuary spread across an area of 614sq kms in the Kurnool district of Andhra Pradesh,
                     Rollapadu offers its visitors a journey into the wild.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> Rs. 3000.00 <span>Rs. 3750.00</span> </div>
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
                </div>
                <div class="price"> Rs. 3000.00 <span>Rs. 4999.00</span> </div>
                <a href="book.php"  class="btn">book now</a>
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
                </div>
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
                </div>
                <div class="price"> Rs. 3000.00 <span>Rs. 3900.00</span> </div>
                <a href="book.php"  class="btn">book now</a>
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
                </div>
                <div class="price"> Rs. 3000.00 <span>Rs. 4500.00</span> </div>
                <a href="book.php"  class="btn">book now</a>
            </div>
        </div>

<div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Borra Caves </h3>
                <p>The Borra Caves are located on the East Coast of India, in the Ananthagiri hills of the Araku Valley</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> Rs. 3000.00 <span>Rs. 4000.00</span> </div>
                <a href="book.php"  class="btn">book now</a>
            </div>
        </div>

    </div>
<br></br>
<center><a href="packages.php" class="btn" style="font-size:50px">More</a></center>
</section>

<!-- packages section ends -->

<!-- services section starts  -->

<!--<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>

    </div>

</section>-->

<!-- services section ends -->

<!-- gallery section starts  -->

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
                <a href="https://en.wikipedia.org/wiki/Rollapadu_Wildlife_Sanctuary"  class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                 <h3>Amaravati</h3>
                <p>Amaravati was a seat of Buddhism prior to the rise of Satavahanas. </p>
<a href="https://en.wikipedia.org/wiki/Amaravati" " class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.webp" alt="">
            <div class="content">
                <h3>Lepakhi Temple</h3>
                <p>The Lepakshi temple, also known as Veerbhadra temple is located in the tiny hamlet of Anantapur District of Andhra Pradesh.</p>
                <a href="https://en.wikipedia.org/wiki/Veerabhadra_Temple,_Lepakshi"  class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>Undavalli Caves</h3>
                <p>The Undavalli Caves, a monolithic example of Indian rock-cut architecture and is located in Mangalagiri(Guntur).</p>
                <a href="https://en.wikipedia.org/wiki/Undavalli_Caves"  class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>Tirupati</h3>
                <p>Sri Venkateswara Swami Vaari Temple is a Hindu temple situated in the hill town of Tirumala at Tirupati.</p>
                <a href="https://en.wikipedia.org/wiki/Tirupati"  class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>Araku Valley</h3>
                <p>Absolutely! Araku Valley is a stunningly beautiful destination that's worth the road trip from Vizag.</p>
                <a href="https://en.wikipedia.org/wiki/Araku_Valley"  class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>Gandikota</h3>
                <p>Gandikota is a historic village which is characterized by its own fort, situated on the right bank of the River Penna.</p>
                <a href="https://en.wikipedia.org/wiki/Gandikota"  class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>Borra Caves</h3>
                <p>The Borra Caves are located on the East Coast of India, in the Ananthagiri hills of the Araku Valley.</p>
                <a href="https://en.wikipedia.org/wiki/Borra_Caves"  class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>Uppalapadu Bird Sanctuary</h3>
                <p>The Uppalapadu Bird Sanctuary is located in Uppalapadu(Guntur).Birds that migrate from places like Siberia and Australia use village water tanks for nesting.</p>
                <a href="https://en.wikipedia.org/wiki/Uppalapadu_Bird_Sanctuary"  class="btn">see more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                <img src="images/pic10.jpeg" alt="">
                    <h3>Prasanth</h3>
                    <p>Excellent. Response is very good. There is no waiting in call and website is very helpful . </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
         <div class="swiper-slide">
                <div class="box">
                   
                    <img src="images/pic5.jpeg" alt="">
                    <h3>Manjunath</h3>
                    <p>Website is very helpful for  online booking and travelling. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic9.jpeg" alt="">
                    <h3>Shahid Dawood</h3>
                    <p>Great service, always answered responses in a timely and helpful manner. No hassles with bookings, all was sorted.</p>
<div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                   <img src="images/pic7.jpeg" alt="">
                    <h3>Sai krishna</h3>
                    <p>Loved our trip. Thank you.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic8.jpeg" alt="">
                    <h3>Mahindra Babu</h3>
                    <p>Would give 4.5 stars
Great price for packages
2 things- would be good if could get immediate confirmation.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

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
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="contact.php">
            <div class="inputBox">
                <input type="text" placeholder="Name..."  disabled="disabled">
                <input type="email" placeholder="Email..." disabled="disabled">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Number" disabled="disabled">
                <input type="text" placeholder="Subject..." disabled="disabled">
            </div>
            <textarea placeholder="Message..." name="" id="" cols="30" rows="10" disabled="disabled"></textarea>
            <input type="submit" class="btn" value="Click The Button To Send Query">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- brand section  -->
<!--<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>-->

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
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <!-- <a href="#services">services</a> -->
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
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

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>
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
let videoBtn = document.querySelectorAll('.vid-btn');
videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});
</script>
   <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
<script>
var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});
</script>


</body>
</html>