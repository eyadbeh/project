<?php
session_start();
include 'config.php';
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
  <title>Cart</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>

  <!-- Navbar start -->
  <header class="main">
    <nav style="font-family:Raleway,sans-serif !important; z-index: 100000; transition:0.6s;">
      <div class="logo">
        <a style="text-decoration: none;" href="../home.php">
          <h1 style="color:white;">capstone</h1>
        </a>
      </div>
      <ul class="menu">
        <li><a style="text-decoration: none;" href="../home.php">HOME</a></li>
        <li><a style="text-decoration: none;" href="../index.php">SPECS</a></li>
        <li><a style="text-decoration: none;" href="../products.php">PRODUCTS</a></li>
        <li><a style="text-decoration: none;" href="../contact-form/contact-us.php">CONTACT US</a></li>
        <li><a style="text-decoration: none;" href="../logout.php">LOGOUT</a></li>
        <li class="username"> <a style="color:white; text-decoration: none;"> Hi, <?php echo $row["name"]; ?> </a> </li>
      </ul>
    </nav>
  </header>
  <!-- Navbar end -->


  <div class="container" style="margin-top: 5%;">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
                              echo $_SESSION['showAlert'];
                            } else {
                              echo 'none';
                            }
                            unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                  }
                  unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Products in your cart!</h4>
                </td>
              </tr>
              <tr style="color:#fff;">
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
              require 'config.php';
              $stmt = $conn->prepare('SELECT * FROM cart');
              $stmt->execute();
              $result = $stmt->get_result();
              $grand_total = 0;
              while ($row = $result->fetch_assoc()) :
              ?>
                <tr style="color:#fff;">
                  <td><?= $row['id'] ?></td>
                  <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                  <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                  <td><?= $row['product_name'] ?></td>
                  <td>
                    <i class=""></i>&nbsp;&nbsp;<?= number_format($row['product_price'], 2); ?>
                  </td>
                  <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                  <td>
                    <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                  </td>
                  <td><i class=""></i>&nbsp;&nbsp;<?= number_format($row['total_price'], 2); ?></td>
                  <td>
                    <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr style="color:#fff;">
                <td colspan="3">
                  <a href="../products.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><i class=""></i>&nbsp;&nbsp;<?= number_format($grand_total, 2); ?></b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

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

      // Change the item quantity
      $(".itemQty").on('change', function() {
        var $el = $(this).closest('tr');

        var pid = $el.find(".pid").val();
        var pprice = $el.find(".pprice").val();
        var qty = $el.find(".itemQty").val();
        location.reload(true);
        $.ajax({
          url: 'action.php',
          method: 'post',
          cache: false,
          data: {
            qty: qty,
            pid: pid,
            pprice: pprice
          },
          success: function(response) {
            console.log(response);
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
      background-image: url(../images/bg7.jpg);
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