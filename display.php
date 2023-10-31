<?php
    include("form.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="T&T.css">
</head>
<body>
    



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

    <div class="swiper-slide slide" style="background: url(images/home-slide/3.webp);">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

    <div class="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Where to</th>
      <th scope="col">How Many</th>
      <th scope="col">Arrvials</th>
      <th scope="col">leaving</th>
    </tr>
  </thead>
  <tbody>

<?php
    $sql = "select * from `book_form`";
    $result = mysqli_query($connection, $sql);
    if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['Email'];
        $phone = $row['phone'];
        $address = $row['address'];
        $location = $row['location'];
        $guests = $row['guests'];
        $arrivals = $row['arrivals'];
        $leaving = $row['leaving'];

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        <td>'.$location.'</td>
        <td>'.$guests.'</td>
        <td>'.$arrivals.'</td>
        <td>'.$leaving.'</td>

        
      </tr>';
    }
        
    }
?>
    

  </tbody>
</table>
    </div>








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


</body>

</html>
</body>
</html>