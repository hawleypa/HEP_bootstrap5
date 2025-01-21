<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hollis Equestrian Park - Home</title>
    
    <?php
    include 'header-styles.html'; 
    ?>

  </head>
<style>
.mark{
    background-color:rgba(25,25,25,0.5);
    color: rgba(255,255,255,1.0);
}
body {
    padding:30px;
    font-size: 16px;
}
.h2 {
  font-size: 10px;
  font-size: 2vw;
}

@media screen and (min-width: 320px) {
 .h2 {
  font-size: calc(4px + 1.5vw);
 }
}
//fix font size for large screens. Calculate this point
@media screen and (min-width: 1750px) {
 .h2 {
  font-size: 2.0rem;
 }
}

</style>
  <body >

    <div class="container">

      <!-- Fixed navbar -->
    <?php
    include_once("analyticstracking.php");
    include 'nav_bar.html'; 
    ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="card h-100 bg-dark text-info text-justify align-items-center mb-3" >
        <br>
          <img class="card-img rounded" src="./images/HEP_Sign_Home.jpg" title="Hollis Equestrian Park" alt="HEP" >
         <!-- <h2 class="card-img-overlay mark h2" >Time to renew memberships, renew signs, and book shows! Check the Contact menu for 2023 forms.</h2> -->
      </div> <!-- /card -->

    </div> <!-- /container -->

    <?php 
      include 'footer-row.html';
    ?>

    <?php 
      include 'scripts-body.html';
    ?>

  </body>
</html>
