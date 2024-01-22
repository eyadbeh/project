<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user_login WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
} else {
  header("Location: login.php");
}

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];

  $query = "INSERT INTO contact_us (id,name,email,comment)
	VALUES('','$name','$email','$comment')";
  mysqli_query($conn, $query);
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Contact Form #6</title>
</head>

<body>
  <header class="main">
    <nav>
      <div class="logo">
        <a href="../home.php">
          <h1 style="font-family: 'Raleway', 'sans-serif' !important;">capstone</h1>
        </a>
      </div>
      <ul class="menu">
        <li><a href="../index.php">SPECS</a></li>
        <li><a href="../products.php">PRODUCTS</a></li>
        <li><a href="../cart/cart.php">CART</a></li>
        <li><a href="../contact-us.php">CONTACT US</a></li>
        <li class="username"> <a style="color:black;"> Hi, <?php echo $row["name"]; ?> </a> </li>
        <li><a href="../logout.php">LOGOUT</a></li>
      </ul>
    </nav>
  </header>
  <script>
    <?php if (isset($_POST["submit"])) { ?> alert('Your comment added Successfully!');
    <?php } ?>
  </script>

  <div class="content">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <p>Ask how we can help you: </p>
              <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>
            </div>
            <div class="col-md-6">
              <form class="mb-5" class="" action="" method="post">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="comment" id="comment" cols="30" rows="7" placeholder="Write your message"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <input type="submit" name="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
  <style>
    body {
      box-sizing: border-box;
      background-image: url(../images/contact-usbg.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
    }

    a {
      text-decoration: none;
    }

    ul {
      list-style: none;
    }

    input,
    button,
    textarea {
      border: none;
      outline: none;
    }

    /*****************NAVIGATION*************/

    .logo {
      color: black;
    }

    nav {
      overflow: hidden;
      height: 100px;
      display: flex;
      justify-content: space-around;
      align-items: center;
      left: 0;
      top: 0;
      width: 100%;
      z-index: 1;
    }

    nav ul {
      display: flex;
    }

    nav ul li a {
      height: 40px;
      line-height: 43px;
      margin: 3px;
      padding: 0 22px;
      display: flex;
      font-size: 0.73rem;
      text-transform: uppercase;
      font-weight: 500;
      letter-spacing: 1px;
      border-radius: 3px;
      color: black;
    }

    nav ul li a:hover {
      background-color: #F4F6F7;
      color: black;
      box-shadow: 5px 10px 30px rgba(26, 26, 48, 0.397);
    }

    nav ul li .username {
      color: white;
    }
  </style>
</body>

</html>