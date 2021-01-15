<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="navbar1" style="padding-bottom:5px;">

    <ul>
      <li><a href="index.php">
          <img src="images/Rocco.jpg" width=60 height=60>
        </a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="#contactus">Contact us</a></li>
      <li><a href="reservation.php">Reserve</a></li>
      <li><a href="cart.php">🛒</a></li>
    </ul>
    <div style="background-color:#dddddd;text-align:center;height:55px;margin-top:5px;">
      <h1>Cart</h1>
    </div>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-2">

          </div>

          <div class="col-sm-9 padding-right">
            <div class="row">
              <?php

              include("db_connect.php");


              $query = "select * from orders,product where orders.Pid=product.Pid";

              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($result)) {
                echo '<div class="card" style="width:17em;text-align:center;margin:5px;" >';
                echo '<img src="images/' . $row['Pimages'] . '" style="width:210px;height:140px;position:center;padding-top:10px;padding-left:60px"/>';
                echo '<h2>' . $row['Pname'] . '</h2>';
                echo '<p>' . $row['Pingredients'] . '</p>';
                echo '<p><b>' . $row['Pprice'] . '.00kn</b></p>';
                echo '<p>' . $row['quantity'] . '</p>';
                echo '<p>Total is:</p>';
                $total = 0;
                $total = $row['Pprice'] * $row['quantity'];
                echo '<p><b>';
                echo $total;
                echo '</b></p>';
                echo '<a href="deleteitems.php?Oid=' . $row['Oid'] . '"<button type="button" class="btn btn-secondary">Delete</button></a>';

                echo '</div>';
              }






              ?>
              <?php

              ?>


              <a class="button" href="checkout.php" role="button" style="margin-top:10px; margin-bottom:55px">Proceed to Checkout</a>

            </div>
          </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<footer style="
  background-color: #dddddd;
  color: black;
  text-align: center; margin-bottom:0">
  <p id="contactus">Contact us on:</p>
  <a href="https://www.facebook.com/RestaurantRocco/" class="fa fa-facebook" style="font-size:35px; margin-right:5px"></a>
  <a href="https://www.instagram.com/rocco.restaurant/" class="fa fa-instagram" style="font-size:35px"></a>
</footer>

</html>