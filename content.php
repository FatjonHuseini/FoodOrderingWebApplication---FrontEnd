<p style="font-family:Calibri light; font-size: 50px; text-align:center;">Rocco Restaurant Pizzeria</p>
<?php
  include('carousel.php')
?>
<h2 style="text-align:center">Most Ordered Dishes</h2>
<div class="row">

<?php
   include("db_connect.php");

   $query="select * from product where Pid in ('22','50','61')";
   $result=mysqli_query($conn,$query);

  while($row=mysqli_fetch_array($result))
 {

  echo '<div class="card" style="width:17em;text-align:center;margin:5px;" >';
  echo '<img src="images/'.$row['Pimages'].'" style="width:210px;height:140px;position:center;padding-top:10px;padding-left:60px"/>';
     echo '<h2>'.$row['Pname'].'</h2>';
     echo '<p>'.$row['Pingredients'].'</p>';
     echo '<p><b>'.$row['Pprice'].'.00kn</b></p>';
     
   
 
  echo '</div>';
 }
?>
</div>
<a class="button" href="menu.php" role="button" style="margin-top:10px">Order Now</a>
<br>
<br>







<h2 style="text-align:center">Customers review</h2></br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/avatar.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>langej</h2>
        <p class="title"><b>Friendly people, quick service, fun owner</b></p>
        <p>Very fair prices in the center of Hvar. Good food with fish, pasta, cevapcici and wine and a fun owner who made our12 guest feel welcome, even without a reservation. The square (on Trg Svetog Stjepanatrg) is were it all happens, unless you want to go for fine dining elsewhere in the town.</p>
        <p style="text-align:center">⭐⭐⭐⭐⭐</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/avatar.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>natcak</h2>
        <p class="title"><b>Good food</b></p>
        <p>We had a lovely meal here. Went with my three kids and my parents. Service was good and quick. A plus was he seemed to actually want to do his job. Not like so many we’ve been to where it was a bother to even ask for a drink! Drinks came out quickly as did our food. We had pizza, burger, chevap, cabbage salad, lasagna and prosciutto. All of it was tasty and nice. Happy with it all.</p>
        <p style="text-align:center">⭐⭐⭐⭐</p>
    
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/avatar.png" alt="John" style="width:100%">
      <div class="container">
        <h2>JasonPain</h2>
        <p class="title"><b>Fair prices good food</b></p>
        <p>Good selection on the menu. Ordered the chicken with pasta . You can choose from 4 different sauces. Service was good. Prices were fair.</p>
        <p style="text-align:center">⭐⭐⭐⭐⭐</p>
      </div>
    </div>
  </div>
</div> </br>
<a class="button" href="https://www.tripadvisor.com/Restaurant_Review-g303808-d3519364-Reviews-Pizzeria_ex_Rocco-Hvar_Hvar_Island_Split_Dalmatia_County_Dalmatia.html" role="button">Review Us</a>
</br></br>
<h2 style="text-align:center" id="aboutus">About Rocco</h2>

</br>

<p>
Rocco Restaurant-Pizzeria is located in the center of the city of Hvar, Croatia. It is a family business owned by Shadan Huseini and his family. The restaurant has been working for 13 years. It is an italian restaurant, making the best pizza in town with mozzarella. Another special thing about Rocco restaurant is that, we are the only restaurant in the city that provided cevapcici in bosnian style, (we totally reccomend them for you). We hope you visit us, anytime you visit Hvar and we will make sure that you remember us for our friendliness and great food.
</p>

</br></br>

<h2 style="text-align:center"> About HVAR</h2>

<img src="images/hvarpano.jpg" alt="Smiley face" height="250" width="830">
</br></br>

<p>
Hvar (pronounced [xv̞âːr]; local Chakavian dialect: Hvor or For, Greek: Pharos, Φάρος, Latin: Pharia, Italian: Lesina) is a Croatian island in the Adriatic Sea, located off the Dalmatian coast, lying between the islands of Brač, Vis and Korčula. Approximately 68 km (42.25 mi) long,[1] with a high east-west ridge of Mesozoic limestone and dolomite, the island of Hvar is unusual in the area for having a large fertile coastal plain, and fresh water springs. Its hillsides are covered in pine forests, with vineyards, olive groves, fruit orchards and lavender fields in the agricultural areas. The climate is characterized by mild winters, and warm summers with many hours of sunshine.[2] The island has 11,103[3] residents, making it the 4th most populated of the Croatian islands.
</p>
</br></br>

<h1 style="text-align:center">Our location</h1>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2909.7796645190333!2d16.440248815349896!3d43.17214897914078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133581873dba7e01%3A0xd185b5f360ffb785!2sPizzeria%20Rocco!5e0!3m2!1sen!2smk!4v1589116685749!5m2!1sen!2smk" width="830" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</br></br>


