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
    <!-- <link rel="stylesheet" href="style.css"> -->
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

<!-- home section starts  -->

<section class="home">
    
    <div class="swiper home-slider">
        <div class="w swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(images/home-slide/3.webp);">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide/1.png);">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide/2.png);">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>



<!-- home section ends -->


    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">


            <div class="box">
                <img id="img" src="images/services-adventure.png" alt="">
                <h3>adventures</h3>
            </div>
            <div class="box">
                <img id="img" src="images/services-tour_guide.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img id="img" src="images/services-trekking.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img id="img" src="images/services-off_road.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img id="img" src="images/services-camp_fire.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img id="img" src="images/services-camping.png" alt="">
                <h3>camping</h3>
            </div>

        </div>



    </section>
    <!-- services section starts -->



    <!-- services section ends -->
    <!-- home about section starts -->

<section class="home-about">
    <div class="image">
        <img src="images/about us/about-us.avif" alt="about us image">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt sit, animi culpa vero rem modi iste quae impedit facilis mollitia? Eius, earum mollitia enim dicta architecto tempore distinctio aperiam cupiditate!</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

<!-- home about section ends -->

<!-- home package start -->
<section class="home-package">
    <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/book-tuor/img-01.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, non?</p>
                    <a href="book.php " class="btn">book now</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="images/book-tuor/img-02.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, non?</p>
                    <a href="book.php " class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/book-tuor/img-03.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, non?</p>
                    <a href="book.php " class="btn">book now</a>
                </div>
            </div>

        </div>

    

    <div class="load-more"> <a href="package.php " class="btn">load more</a> </div>
</section>


<!-- home package end --> 

<!-- home offer section starts  -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem corrupti cumque molestiae, dolorum repellendus quaerat sequi. Sed iusto id fuga natus, atque vel autem vero!</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!-- home offer section ends -->



    <!-- footer section start -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class=" fa fa-angle-right"></i> home</a>
                <a href="about.php"> <i class=" fa fa-angle-right"></i> about</a>
                <a href="package.php"><i class=" fa fa-angle-right"></i> package</a>
                <a href="book.php"> <i class=" fa fa-angle-right"></i> book</a>
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
    <!-- footer section ends -->
    <footer></footer>





    <script src="js/T&T"></script>

    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<script>
    var swiper = new Swiper(".home-slider", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>
<Style>
.home-package {
    background: var(--light-bg);
}
.home-package .box-container{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 3rem;
}
.home-package .box-container .image {
    height: 25rem;
    overflow: hidden;

}
.home-package .box-container .image img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: .2s linear;
}
.home-package .box-container .box{
    border: var(--border);  
    box-shadow: var(--box-shadow);
    background: var(--white);
}
.home-package .box-container .box .content {
    padding: 2rem;
    text-align: center;

}
.home-package .box-container .box .content h3 {
    font-size: 2.5rem;
    color: var(--black);
}
.home-package .box-container .box .content p {
    font-size: 1.5rem;
    color: var(--light-black );
    line-height: 2;
    padding: 1rem 0;
}
.home-package .load-more {
    text-align: center;
    margin-top: 2rem;
}
</Style>
</body>

</html>