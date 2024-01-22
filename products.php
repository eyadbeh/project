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
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  <!-- Navbar start -->
  <header class="main">
    <nav style="font-family:Raleway,sans-serif !important; z-index: 100000; transition:0.6s;">
      <div class="logo">
        <a style="text-decoration: none;" href="home.php">
          <h1 style="color:white;">capstone</h1>
        </a>
      </div>
      <ul class="menu">
        <li><a style="text-decoration: none;" href="home.php">HOME</a></li>
        <li><a style="text-decoration: none;" href="index.php">SPECS</a></li>
        <li><a style="text-decoration: none;" href="contact-form/contact-us.php">CONTACT US</a></li>
        <li><a style="text-decoration: none;" href="logout.php">LOGOUT</a></li>
        <li class="username"> <a style="color:white; text-decoration: none;"> Hi, <?php echo $row["name"]; ?> </a> </li>
        <a class="nav-link" href="./cart/cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
      </ul>
    </nav>
  </header>
  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container" style="margin-top: 5%;">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
      $stmt = $conn->prepare('SELECT * FROM product');
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) :
      ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
          <div class="card-deck">
            <div class="card p-2 border-secondary mb-2">
              <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
              <div class="card-body p-1">
                <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
                <h5 class="card-text text-center text-danger"><i class="fas fa-money-bill"></i>&nbsp;&nbsp;<?= number_format($row['product_price'], 2) ?>/-</h5>

              </div>
              <div class="card-footer p-1">
                <form action="" class="form-submit">
                  <div class="row p-2">
                    <div class="col-md-6 py-1 pl-4">
                      <b>Quantity : </b>
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                    </div>
                  </div>
                  <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                  <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                  <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                  <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                  <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                  <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                    cart</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

  <!-- Displaying Products End -->
  <footer class="bg-dark text-center text-white" style=" position: fixed;  left: 0; bottom: 0; width: 100%;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section>
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

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
    $(document).ready(function() {

      // Send product details in the server
      $(".addItemBtn").click(function(e) {
        e.preventDefault();
        var $form = $(this).closest(".form-submit");
        var pid = $form.find(".pid").val();
        var pname = $form.find(".pname").val();
        var pprice = $form.find(".pprice").val();
        var pimage = $form.find(".pimage").val();
        var pcode = $form.find(".pcode").val();

        var pqty = $form.find(".pqty").val();

        $.ajax({
          url: 'action.php',
          method: 'post',
          data: {
            pid: pid,
            pname: pname,
            pprice: pprice,
            pqty: pqty,
            pimage: pimage,
            pcode: pcode
          },
          success: function(response) {
            $("#message").html(response);
            window.scrollTo(0, 0);
            load_cart_item_number();
          }
        });
      });

      // Load total no.of items added in the cart and display in the navbar
      load_cart_item_number();

      function load_cart_item_number() {
        $.ajax({
          url: 'action.php',
          method: 'get',
          data: {
            cartItem: "cart_item"
          },
          success: function(response) {
            $("#cart-item").html(response);
          }
        });
      }
    });
  </script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap");

    body {
      box-sizing: border-box;
      font-family: "Raleway", sans-serif !important;
      background-image: url(images/bg7.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
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
      color: white;
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
      transition: 0.6s ease-in-out;
      color: #ffffff;
    }

    nav ul li a:hover {
      background-color: #002f6a;
      color: #fff;
      box-shadow: 5px 10px 30px rgba(26, 26, 48, 0.397);
    }

    nav ul li .username {
      color: white;
    }

    nav {
      position: fixed;
      top: 0;
      width: 100%;
      position: fixed;
      top: 0;
      width: 100%;
    }
  </style>
</body>

</html>