<?php
session_start();
require 'config.php';

$grand_total = 0;
$allItems = '';
$items = [];

$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
  $grand_total += $row['total_price'];
  $items[] = $row['ItemQty'];
}
$allItems = implode(', ', $items);

if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user_login WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
} else {
  header("Location: ../login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
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
        <li class="username"> <a style="color:white;"> Hi, <?php echo $row["name"]; ?> </a> </li>
        <li><a style="text-decoration: none;" href="../logout.php">LOGOUT</a></li>
        <a class="nav-link" href="../cart/cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
      </ul>
    </nav>
  </header>
  <!-- Navbar end -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
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

    .container {
      margin-top: 5%;
    }
  </style>
</body>

</html>