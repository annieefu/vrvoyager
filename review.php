<?php
   // INCLUDE ON EVERY TOP-LEVEL PAGE!
   include("includes/init.php");

   //FORM PHP

   ?>
<!DOCTYPE html>
<html lang="en">
<head>


<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:600i&display=swap" rel="stylesheet">
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <script src= "javascript.js" ></script>
      <title>Log In</title>
   </head>
   <body>

   <div class = "container">
   <?php include("includes/header.php"); ?>
   <div class="row">
<div class="col-sm-6 col-lg-6">
<a href="sea.php">
    <div class="content">
    
<div class="content-overlay"></div>
    <img class="content-image" src = "images/underwater.png" >
    <div class="content-details fadeIn-bottom">
        <p class="content-text"><strong>A educational Virtual Reality experience of what makes us who we are:</strong> </br>Our hearts, our brains, and so much more!
        </p>
      </div>
</div>
</a>
</div>

<div class="col-sm-6 col-lg-6">
<a href="organ.php">
    <div class="content">
    
<div class="content-overlay"></div>
    <img class="content-image" src = "images/anatomy3.png" >
    <div class="content-details fadeIn-bottom">
        <p class="content-text"><strong>A educational Virtual Reality experience of what makes us who we are:</strong> </br>Our hearts, our brains, and so much more!
        </p>
      </div>
</div>
</a>
</div>


</div>

   </div>


      
   </body>

   <footer>
   
   <?php include("includes/footer.php"); ?>
   
   </footer>
</html>