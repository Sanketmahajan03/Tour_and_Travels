<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <!-- swipper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- font awsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="Travel.css">


</head>

<body>
    <!-- Header section start  -->
    <section class="header">
        <a href="home.php" class="logo">Travel.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>

        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->
    <div class="heading" style="background:url(images/book-tuor/img-04.jpeg) no-repeat" >
        <h1>book</h1>
    </div>

<!-- booking section start here -->
<section class="booking">
    <h1 class="heading-title"> book your trip!</h1>

    <form action="form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="Email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>




<!-- booking section ends here -->
   <!-- footer section start -->

<footer>
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i  class=" fa fa-angle-right"></i> home</a>
                <a href="about.php"> <i class=" fa fa-angle-right" ></i> about</a>
                <a href="package.php"><i class=" fa fa-angle-right"></i> package</a>
                <a href="book.php"> <i  class=" fa fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fa fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fa fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fa fa-angle-right"></i> privacy pokicy</a>
                <a href="#"> <i class="fa fa-angle-right"></i> terms of use</a>

            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fa fa-phone"></i>+123-456-7890</a>
                <a href="#"> <i class="fa fa-phone"></i>+111-222-3333</a>
                <a href="#"> <i class="fa fa-envelope"></i>conatactme@gmail.com</a>
                <a href="#"> <i class="fa fa-map"></i>Nashik, india -422012</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"> <i class="fa fa-facebook-official"></i>facebook</a>
                <a href="#"> <i class="fa fa-twitter"></i>twitter</a>
                <a href="#"> <i class="fa fa-instagram"></i>instagram</a>
                <a href="#"> <i class="fa fa-linkedin-square"></i>Linkdin</a>
            </div>

        </div>

        <div class="credit"> created by <span>mr.Sanket Mahajan</span>| all rights reserved! </div>
    </section>
</footer>

    <!-- footer section ends -->





    <script src="js/T&T.js"></script>
    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>