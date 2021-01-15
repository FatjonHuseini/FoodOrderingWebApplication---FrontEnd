<!doctype html>
<html lang="en">

<head>
  <style>
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button5 {
      background-color: white;
      color: black;
      border: 2px solid #555555;
    }

    .button5:hover {
      background-color: #555555;
      color: white;
    }
  </style>

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
    <h1> Make a reservation </h1>
    <br>
    <br>
    <section>
      <div class="container">
        <div class="row">
          <h3 style="padding-left:270px" ;> Reservations can be done from 1/May until 10/October</h3>

          <br>
          <br>
          <form action="rdb.php" method="POST">
            <label style="padding-left:450px;">Name: <input type="text" name="name"></label><br />
            <label style="padding-left:362px;">Number of people: <input type="text" name="nr"></label><br />
            <label style="padding-left:428px;" name="date" for="date">Date: </label>
            <input type="date" name="date" value="2018-07-22" min="2018-01-01" max="2025-12-31">
            <br>
            <label style="padding-left:350px;" name="time" for="time">Time: </label>
            <input type="time" name="time" min="09:00" max="23:00" required>
            <br>
            <br>
            <button type="submit" class="button button5" style="margin-top:10px; margin-bottom:55px; margin-left:450px; width: 300px;">Make reservation</button>

          </form>


        </div>
      </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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