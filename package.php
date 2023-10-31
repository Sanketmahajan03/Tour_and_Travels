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
    <div class="heading" style="background:url(images/footer-bg.png) no-repeat" >
        <h1>packages</h1>
    </div>

    <!-- package section starts -->


<section class="package">
    <h1 class="heading-title">top destinations</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/package/img01..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/package/img02..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/package/img03..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/package/img04..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package/img05..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package/img06..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package/img07..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package/img08..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package/i.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package/img10..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package/img11..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package/img12..jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, rerum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><span class="btn">load more</span></div>
</section>

<script>
    let loadMoreBtn = document.querySelector('.package .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () => { 
  let boxes = [...document.querySelectorAll('.package .box-container .box')];
  for(var i=currentItem; i<currentItem+3; i++){
    boxes[i].style.display = 'inline-block';
  };
  currentItem +=3;
  if(currentItem >= boxes.length) {
    loadMoreBtn.style.display = "none";
  }
}
</script>





    <!-- package section ends -->




















    <!-- footer section start -->

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





    <!-- footer section ends -->
    <footer></footer>





    <script src="js/T&T.js"></script>
    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>