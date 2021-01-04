<?php
// page title
$page_title='Fitness Gym Diet';
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

   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


   <!-- custom styles for this template -->
   <link rel="stylesheet" href="css/style.css" type="text/css">
   <link rel="stylesheet" href="css/other.css" type="text/css">
   <!-- adding icon to this templete -->
   <link rel="shortcut icon" type="image/png" href="images/logo.ico">



 </head>
 <body>
   <!-- template what about diet -->
   <!-- diet image -->
   <img src="images/diet.jpeg" alt="Diet image here!" id="diet">

<!-- four methods we have in diet -->
   <div class="container">
   <div class="row">
     <div class=" col-lg-3 col-md-6 col-sm-12">
       <div class="card"  id="monthlycards">
         <div class="card-body">
           <h5 class="card-title">NUTRITION</h5>
           <p class="card-text">
             At Fitness gym, we know that even the best training program alone won't get you the results that you seek for your
           </p>
           <a href="dietdescribe.php" class="link">Read more</a>
         </div>
       </div>
     </div>
     <!-- diet for weight loss -->
     <div class="col-lg-3 col-md-6 col-sm-12">
       <div class="card" id="monthlycards">
         <div class="card-body">
           <h5 class="card-title">WEIGHT LOSS</h5>
           <p class="card-text">Weight loss isn't just about eating less or working out more. On the other hand, it is an intelligent combination of cardio,
           </p>
           <a href="dietdescribe.php" class="link">Read more</a>
         </div>
       </div>
     </div>
     <!-- here diet for workout -->
     <div class="col-lg-3 col-md-6 col-sm-12">
       <div class="card" id="monthlycards">
         <div class="card-body">
           <h5 class="card-title">WORKOUTS</h5>
           <p class="card-text">At Fitness gym, we believe that each person and their body type varies. We customize your workout plan completely to your body.</p>
           <a href="dietdescribe.php" class="link">Read more</a>
         </div>
       </div>
     </div>
     <!-- here cardio diet -->
     <div class="col-lg-3 col-md-6 col-sm-12">
       <div class="card" id="monthlycards">
         <div class="card-body">
           <h5 class="card-title">CARDIO</h5>
           <p class="card-text">Cardio can get monotonous with typical options such as endless hours on the elliptical or sitting on a stationary bike.</p>
           <a href="dietdescribe.php" class="link">Read more</a>
         </div>
       </div>
     </div>
   </div>
   </div>
   <!-- end of diet template -->

 </body>
 <!-- adding bootstrap JS CDN -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>


 </html>




 <?php
 include('includes/footer.html');
  ?>
