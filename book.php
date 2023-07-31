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
        <h1>Book</h1>
    </div>

    <!-- booking section starts -->
     <section class="booking">
        <h1 class="heading-title">Book Your Trip</h1>
        <form action="book_form.php" class="book-form" method="post">
            <div class="flex">
                <div class="inputBox">
                    <span>Name:</span>
                    <input type="text" placeholder="Enter Your Name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="text" placeholder="Enter Your Email" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone:</span>
                    <input type="text" placeholder="Enter Your Phone Number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Address:</span>
                    <input type="text" placeholder="Enter Your Address" name="address">
                </div>
                <div class="inputBox">
                    <span>Where to:</span>
                    <input type="text" placeholder="Enter Your Destination" name="location">
                </div>
                <div class="inputBox">
                    <span>How many:</span>
                    <input type="number" placeholder="How Many Guest" name="guests">
                </div>
                <div class="inputBox">
                    <span>Arrivals:</span>
                    <input type="date"  name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Leaving:</span>
                    <input type="date"  name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
     </section>
    <!-- booking section ends -->

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
        <script src="" async defer></script>
    </body>
</html>