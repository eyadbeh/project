<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user_login WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
} else {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>capstone homepage</title>
  <link rel="stylesheet" href="css/home-style.css" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />

</head>

<body>
  <header class="main">
    <nav style="font-family:Raleway,sans-serif !important; z-index: 100000; transition:0.6s;">
      <div class="logo">
        <a href="home.php">
          <h1 style="color:white;">capstone</h1>
        </a>
      </div>
      <ul class="menu">
        <li><a href="index.php">SPECS</a></li>
        <li><a href="products.php">PRODUCTS</a></li>
        <li><a href="cart/cart.php">CART</a></li>
        <li><a href="contact-form/contact-us.php">CONTACT US</a></li>
        <li class="username"> <a style="color:white;"> Hi, <?php echo $row["name"]; ?> </a> </li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </nav>
    <div class="main-heading">
      <h1>IMMERSIVE EXPERIENCES THAT DELIVER</h1>
      <p></p>
      <a class="main-btn" href="#introduction">introduction</a>
    </div>
  </header>
  <section class="slideshow-container">
    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade slideshow-container" data-mdb-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="4" aria-label="Slide 5"></button>
      </div>

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
          <img src="images/png_5.avif" style="height: 600px;" class="w-100" alt="" />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="images/png_3.avif" style="height: 600px;" class="w-100" alt="" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="images/png_2.avif" style="height: 600px;" class="w-100" alt="" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="images/png_7.avif" style="height: 600px;" class="w-100" alt="" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Forth slide label</h5>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="images/png_8.avif" style="height: 600px;" class="w-100" alt="" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Fifth slide label</h5>
          </div>
        </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Carousel wrapper -->
  </section>
  <div class="about-us">
    <p>MEET THE TEAM!</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_omar.jpg">
          </div>
          <div class="team-content">
            <h3 class="name">Omar Anwar</h3>
            <h4 class="title">Web Developer</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_eyadd.jpg">
          </div>
          <div class="team-content">
            <h3 class="name">Eyad Osama</h3>
            <h4 class="title">Web Developer</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_karim.jpeg">
          </div>
          <div class="team-content">
            <h3 class="name">Karim Sayed</h3>
            <h4 class="title">Web Developer</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_jimmy.jpeg">
          </div>
          <div class="team-content">
            <h3 class="name">Mohamed Gamal</h3>
            <h4 class="title">Web Developer</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_nader.jpeg">
          </div>
          <div class="team-content">
            <h3 class="name">Nader Wael</h3>
            <h4 class="title">Hardware Team</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_foxe.jpeg">
          </div>
          <div class="team-content">
            <h3 class="name">Abdelrahman Ahmed</h3>
            <h4 class="title">Hardware Team</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_ebrahim.jpeg">
          </div>
          <div class="team-content">
            <h3 class="name">Ibrahim Arafa</h3>
            <h4 class="title">Hardware Team</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_ahmed.jpg">
          </div>
          <div class="team-content">
            <h3 class="name">Ahmed Ehab</h3>
            <h4 class="title">GUI Team</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_shimaa.jpg">
          </div>
          <div class="team-content">
            <h3 class="name">Shimaa Saeed</h3>
            <h4 class="title">GUI Team</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="images/team_mahmoud.jpeg">
          </div>
          <div class="team-content">
            <h3 class="name">Mahmoud Hossam</h3>
            <h4 class="title">GUI Team</h4>
          </div>
          <ul class="social">
            <li><a href="https://www.facebook.com" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://www.twitter.com" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://www.google.com" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://www.linkedin.com" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="features">
    <div class="feature-container">
      <div class="feature-box">
        <div class="f-img">
          <img src="images/info-icon1.png" />
        </div>
        <div class="f-text">
          <h4>Hardware Tutorial</h4>
          <p>Car Specs.</p>
          <a href="index.php" class="main-btn">Check</a>
        </div>
      </div>
      <div class="feature-box">
        <div class="f-img">
          <img src="images/info-icon3.png" />
        </div>
        <div class="f-text">
          <h4>App Development</h4>
          <p>GUI Application.</p>
          <a href="#" class="main-btn">Check</a>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="about-img">
      <img src="images/about.png">
    </div>
    <div class="about-text">
      <h2>Start Tracking Your Ideas</h2>
      <p>In my work with creative entrepreneurs, I've found that one of the most essential systems to put in place is something to keep track of ideas.Because when working with visionaries who have all the ideas all the time, there needs to be a simple way to keep track of ideas so they don't get lost!</p>
      <a href="http://localhost/ecommerce9/upload%20page/uploads/1707221658010172capstone-documentation.pdf"><button class="main-btn" id="introduction" style="width: 50%;">Download Documentation</button></a>
    </div>
  </section>
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com" role="button"><i class="fab fa-linkedin-in"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://github.com" role="button"><i class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="#">capstone.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
  <script>
    window.onscroll = function() {
      myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>
  <style>
    nav {
      backdrop-filter: brightness(0.5);
      position: fixed;
      top: 0;
      width: 100%;
      position: fixed;
      top: 0;
      width: 100%;
    }
    /* Meet the team Start */
    .about-us p{
      text-align: center;
      color: white;
      text-shadow: #000;
      font-size: 60px;
      font-family: 'Raleway', 'sans-serif' ;
    }
    .our-team {
      padding: 30px 0 40px;
      margin-bottom: 30px;
      background-color: #f7f5ec;
      text-align: center;
      overflow: hidden;
      position: relative;
      border-radius: 10px;
    }

    .our-team .picture {
      display: inline-block;
      height: 130px;
      width: 130px;
      margin-bottom: 50px;
      z-index: 1;
      position: relative;
    }

    .our-team .picture::before {
      content: "";
      width: 100%;
      height: 0;
      border-radius: 50%;
      background-color: #1369ce;
      position: absolute;
      bottom: 135%;
      right: 0;
      left: 0;
      opacity: 0.9;
      transform: scale(3);
      transition: all 0.3s linear 0s;
    }

    .our-team:hover .picture::before {
      height: 100%;
    }

    .our-team .picture::after {
      content: "";
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background-color: #1369ce;
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
    }

    .our-team .picture img {
      width: 100%;
      height: auto;
      border-radius: 50%;
      transform: scale(1);
      transition: all 0.9s ease 0s;
    }

    .our-team:hover .picture img {
      box-shadow: 0 0 0 14px #f7f5ec;
      transform: scale(0.7);
    }

    .our-team .title {
      display: block;
      font-size: 15px;
      color: #4e5052;
      text-transform: capitalize;
    }

    .our-team .social {
      width: 100%;
      padding: 0;
      margin: 0;
      background-color: #1369ce;
      position: absolute;
      bottom: -100px;
      left: 0;
      transition: all 0.5s ease 0s;
    }

    .our-team:hover .social {
      bottom: 0;
    }

    .our-team .social li {
      display: inline-block;
    }

    .our-team .social li a {
      display: block;
      padding: 10px;
      font-size: 17px;
      color: white;
      transition: all 0.3s ease 0s;
      text-decoration: none;
    }

    .our-team .social li a:hover {
      color: #1369ce;
      background-color: #f7f5ec;
    }

    /* Meet the team End */

    .slideshow-container {
      margin-top: 5rem;
      margin-bottom: 5rem;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .button {
      color: #ffffff;
      background-color: #0F2F95;
      text-decoration: none;
      font-weight: 600;
      font-size: 17px;
      display: inline-block;
      padding: 10px 15px;
      letter-spacing: 1px;
      border-radius: 10px;
      margin-bottom: 40px;
      transition: 0.7s ease;
    }

    .button:hover {
      background-color: #00155A;
      transform: scale(1.1);
    }
  </style>
</body>

</html>