<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>


    <!-- header section start -->
    <section class="header">
    <a href="home.php" class="logo">My Traveller</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars">

    </div>
</section>
    <!-- header section end -->
   
    <!--home section starts-->
<!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<section class="home">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/1.jpg)">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/2.jpg)">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/3.jpg)">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your trust</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
           
        </div>
        <!-- Add navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- Include Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  const swiper = new Swiper('.home-slider', {
    loop: true, // Enable looping
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000, // Set the time interval between slides (in milliseconds)
    },
  });
</script>

<!--home section ends-->

 <!--services section start-->
 
 <section class="services">
    <div class="service-box">
        <img src="images/14.jpg" alt="Service 1">
        <h3>Adventure</h3>
    </div>
    <div class="service-box">
        <img src="images/t.jpg" alt="Service 2">
        <h3>Tour Guide</h3>
    </div>
    <div class="service-box">
        <img src="images/c.jpeg" alt="Service 3">
        <h3>Camp Fire</h3>
    </div>
    <div class="service-box">
        <img src="images/o.jpg" alt="Service 4">
        <h3>Off Road</h3>
    </div>
</section>



     <!--services section end-->

     <!-- home about section starts-->
       <section class="home-about">
        <div class="image">
            <img src="images/6.jpg" alt="">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore consequuntur, nemo tempore quibusdam quod odit similique fugit aspernatur consequatur alias ea expedita rerum repellendus sunt vitae numquam beatae, amet, atque at molestias. Hic, sequi?</p>
            <a href="about.php" class="btn">read more</a>
        </div>
       </section>
    <!-- home about section ends -->

    <!-- home package sectinon starts -->
    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci saepe, odit dolorum sapiente quia soluta aut ad dolor deserunt? Quo voluptates quaerat placeat odio nostrum debitis asperiores hic, corrupti consequuntur ipsam nisi assumenda soluta illum?</p>
                   <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci saepe, odit dolorum sapiente quia soluta aut ad dolor deserunt? Quo voluptates quaerat placeat odio nostrum debitis asperiores hic, corrupti consequuntur ipsam nisi assumenda soluta illum?</p>
                   <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/11.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci saepe, odit dolorum sapiente quia soluta aut ad dolor deserunt? Quo voluptates quaerat placeat odio nostrum debitis asperiores hic, corrupti consequuntur ipsam nisi assumenda soluta illum?</p>
                   <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">Load More</a>
        </div>
    </section>
   <!-- home package section ends -->
  <section class="home-offer">
    <div class="content">
        <h3>upto 50% Off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel illo non saepe expedita dignissimos aliquam blanditiis doloribus. Tempore labore maxime fuga pariatur non dicta modi maiores nostrum voluptatum, natus adipisci aperiam. Voluptatem porro labore repudiandae!</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
  </section>
   <!-- home offer section starts -->

   <!-- home offer section ends -->
    <!--footer section starts-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"> </i>Home</a>
            <a href="about.php"> <i class="fas fa-angle-right"> </i>About</a>
            <a href="package.php"> <i class="fas fa-angle-right"> </i>package</a>
            <a href="book.php"> <i class="fas fa-angle-right"> </i>Book</a>
            </div>
            <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"> </i>Ask Questions</a>
            <a href="#"> <i class="fas fa-angle-right"> </i>About Us</a>
            <a href="#"> <i class="fas fa-angle-right"> </i>Privacy Policy</a>
            <a href="#"> <i class="fas fa-angle-right"> </i>Terms Of Use</a>
            </div>

            <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"> </i>+91 7347598375</a>
            <a href="#"> <i class="fas fa-phone"> </i>+91 5689346784</a>
            <a href="#"> <i class="fas fa-envelope"> </i>barney123@gmail.com</a>
            <a href="#"> <i class="fas fa-map"> </i>Puducherry, India-605014</a>
            </div>
            <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f"> </i>FaceBook</a>
            <a href="#"> <i class="fab fa-twitter"> </i>Twitter</a>
            <a href="#"> <i class="fab fa-instagram"> </i>Instagram</a>
            <a href="#"> <i class="fab fa-linkedin"> </i>Linkedin</a>
            </div>
        </div>

    </section>
    <!--footer section ends-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
    <script src="script.js" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    </body>
</html>