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
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>


    <!-- header section start -->
    <section class="header">
    <a href="home.php" class="logo">Travel</a>

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
   <div class="heading">
    <h1>About Us</h1>
</div>


    <!-- about section starts -->
    <section class="about">
        <div class="image">
            <img src="images/15.jpg" alt="">
        </div>
        <div class="content">
            <h3>why Choose</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt alias fuga ducimus amet temporibus molestias eum modi corporis odit deleniti delectus libero dicta nobis, esse dolorum accusantium aperiam quod facere veritatis impedit corrupti dolorem. Illo.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem libero esse veritatis ab repellendus quos ex, minus recusandae fuga mollitia.</p>
            <div class="icons-container">
            <div class="icons">
                    <i class = "fas fa-map"></i>
                    <span>Top Destination</span>
                </div>
                <div class="icons">
                    <i class = "fas fa-hand-holding-usd"></i>
                    <span>Affordable Price</span>
                </div>
                <div class="icons">
                    <i class = "fas fa-headset"></i>
                    <span>24/7 Service</span>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- review section starts -->
    <!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<section class="reviews">
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestiae aliquid facere maiores illo. Adipisci nulla repellat labore nisi laboriosam fuga asperiores, laborum consequuntur autem debitis cumque fugit sit qui.</p>
                <h3>John Doe</h3>
                <span>Traveller</span>
                <img src="images/1p.jpg" alt="">
            </div>
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestiae aliquid facere maiores illo. Adipisci nulla repellat labore nisi laboriosam fuga asperiores, laborum consequuntur autem debitis cumque fugit sit qui.</p>
                <h3>John Doe</h3>
                <span>Traveller</span>
                <img src="images/2p.avif" alt="">
            </div>
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestiae aliquid facere maiores illo. Adipisci nulla repellat labore nisi laboriosam fuga asperiores, laborum consequuntur autem debitis cumque fugit sit qui.</p>
                <h3>John Doe</h3>
                <span>Traveller</span>
                <img src="images/3p.jpeg" alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Include Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  const swiper = new Swiper('.reviews-slider', {
    loop: true, // Enable looping
    slidesPerView: 1, // Show one slide at a time
    spaceBetween: 30, // Adjust spacing between slides
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 5000, // Set the time interval between slides (in milliseconds)
    },
  });
</script>

    <!-- review section ends -->

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
    </body>
</html>