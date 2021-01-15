<!doctype html>
<html lang="en">

<head>
  <style>
    table,
    td,
    th {
      border: 3px solid black;

    }

    table {
      border-collapse: collapse;
      width: 50%;
      text-align: center;

    }

    th {
      height: 50px;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

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
      <h1>Checkout</h1>


    </div>
    <br>
    <br>
    <section>
      <?php

      include("db_connect.php");


      $query = "select * from orders,product where orders.Pid=product.Pid";

      $result = mysqli_query($conn, $query);
      echo '<div style="padding-left:530px";>';
      echo "<table>";
      echo "<tr><th>Name</th><th>Quantity</th><th>Price</th><th>Total</th></tr>";
      $totalSum = 0;
      $order = "";
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>";
        echo $row['Pname'];
        echo "</td>";
        echo "<td>";
        echo $row['quantity'];
        echo " </td>";
        echo "<td>";
        echo $row['Pprice'] . '.00kn';
        echo " </td>";
        echo "<td>";
        $total = 0;
        $total = $row['Pprice'] * $row['quantity'];
        echo $total . '.00kn';
        echo "</td>";

        echo "</tr>";

        $totalSum += $total;

        $order .= "Product Name:  " . $row['Pname'] . "-----" . " Quantity: " . $row['quantity'] . ";";
      }
      echo "<td>";
      echo "------------";
      echo "</td>";
      echo "<td>";
      echo "------------";
      echo "</td>";
      echo "<td>";
      echo "------------";
      echo "</td>";
      echo "<td>";
      echo "<p id='totalSum'>";
      echo "<b>" . $totalSum . '.00kn';
      echo "</p>";
      echo "</td>";
      echo "</table>";
      echo "</div>";
      ?>

      <div>
        <br>

        <h2>Personal Information</h2>
        <form action="payinfo.php" method="POST">
          <label style="padding-right:90px;">Name and Surname: <input type="text" name="fname" id="fullname" required /></label></br>
          <label>Address: <input type="text" name="address" id="address" required /></label></br>

          <!-- <button type="submit" class="button button5" style="margin-top:10px; margin-bottom:55px;  width: 300px;">Complete the payment</button> -->
        </form>
        <div style="margin-left:300px;">
          <div id="paypal-button-container" style="padding-right:300px;"></div>

          <!-- Include the PayPal JavaScript SDK -->
          <script src="https://www.paypal.com/sdk/js?client-id=AQ9qvHJU0-3TyCyk8ljhsqk9U1taju5VOibibXHb66TsGFBuSOsd3Ahc2tSFgLbM6OZIbP4c2dmjucpn&currency=USD"></script>

          <script>
            // Render the PayPal button into #paypal-button-container
            paypal.Buttons({

              // Set up the transaction
              createOrder: function(data, actions) {


                return actions.order.create({
                  purchase_units: [{
                    amount: {
                      value: "<?php echo $totalSum * 0.15 ?>"
                    }
                  }]
                });
              },

              // Finalize the transaction
              onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                  // Show a success message to the buyer
                  var fullName = $("#fullname").val();
                  var address = $("#address").val();
                  var order = "<?php echo $order ?>";
                  var data = {
                    "fullName": fullName,
                    "address": address,
                    "order": order
                  };

                  $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: data,
                    success: function(res) {
                      // alert("Success: " + res);
                    },
                    error: function(error) {
                      alert("ERROR:" + error);
                    }
                  });

                  <?php
                  echo "alert('Transaction completed successfully!');";

                  echo "window.location.href = 'http://localhost/ExRocco/index.php';";


                  ?>

                });
              }


            }).render('#paypal-button-container');
          </script>


        </div>
      </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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