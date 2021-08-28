<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Netflix-Carousel</title>
    <link rel="stylesheet" href="./index.css" />
  </head>
  <body>
    <div class="netflix-logo">
      <img src="./images/netflix.png" alt="" />
    </div>

    <div class="carousel">
      <div class="carouselbox">
        <!-- Random Data will come here  -->
      </div>

      <a class="switchLeft sliderButton" onclick="sliderScrollLeft()"><</a>
      <a class="switchRight sliderButton" onclick="sliderScrollRight()">></a>
    </div>

    <!-- Just for showing Dynamic Contents :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js"></script>
    <?php 
      include "script.php"
    ?>
    <!-- <script src="./index.js"></script> -->
  </body>
</html>
