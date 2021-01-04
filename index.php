<?php
// page title
$page_title='Fitness Gym';
include('includes/header.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>

  </title>
  <!-- adding bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
  <!-- adding fontawesome CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- custom styles for this template -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/other.css" type="text/css">
  <!-- adding icon to this templete -->
  <link rel="shortcut icon" type="image/png" href="../images/logo.ico">
  
  <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css"
    />
    <link rel="stylesheet" href="style.css" />


</head>
<body>
  <!-- adding carousel to home of fitness gym -->
  <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/carousel01.jpeg" alt="First slide">
  </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carousel02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carousel03.jpg" alt="Third slide">
    </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br><br>
<!-- adding contact form to home page -->

  <?php
// page title
$page_title='contact form';
include('includes/contact.html');
?>


  <!-- ending contact form template -->
<br><br><br>
<!-- few equipment items were added here  just for sample -->
<div class="container">
<h3 id="heading">Lots of quality kit</h3>
<br>
<p class="lead">We've designed everything with you in mind, from the way the club is laid out, to the huge selection of kit available.</p>
</div>
<br><br><br>
<div class="container" id="container">
<img src="images/equipment/cardio01.jpg" alt="Image here!" id="img-grid">
<img src="images/equipment/cardio02.jpg" alt="Image here!" id="img-grid">
<img src="images/equipment/cardio03.jpg" alt="Image here!" id="img-grid">
  </div>
  <br>

  <div class="container" id="container">
    <img src="images/equipment/cardio04.jpg" alt="Image here!" id="img-grid">
    <img src="images/equipment/cardio05.jpg" alt="Image here!" id="img-grid">
    <img src="images/equipment/cardio06.jpg" alt="Image here!" id="img-grid">
  </div>
    <br><br>
    <!-- if you click this directly it takes you to equipment page -->
    <a id="equip-link" class="btn btn-warning btn-lg" href="equipment.php">See our range of equipment</a>

  <br><br>
  <!-- ending equipment template -->

  <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase.js"></script>
  <script src="main.js"></script>
</body>
<!-- adding bootstrap JS CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

<script type="text/javascript" src="js/js.js"></script>
</html>
<?php
include('includes/footer.html');
 ?>
