<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hollis Equestrian Park - Calendar</title>

    <?php
    include 'header-styles.html'; 
    ?>

<style>
.btn, .btn-block{
  border-radius: 5px;
  box-shadow: 0 4px #999;
}
.btn:active, .btn-block:active {
    border-radius: 5px;
    border: 1px solid blue;
    box-shadow: 0 2px #666;
    transform: translateY(4px);
}
.btn:hover, .btn-block:hover {
    border-radius: 5px;
    border: 1px solid blue;
}
@-moz-document url-prefix() {
  fieldset { display: table-cell; }
}
#largeCal {
  height: 600px;
}
#Calendar {
  height: 600px;
}
body{
    padding:50px;
}
@media screen and (max-width: 320px) {
  /* comes into effect for screens less than or equal to 320 pixels */
  #largeCal{
      font-size:9px;
  }
}
@media screen and (min-width: 321px) and (max-width: 480px) {
  /* comes into effect for screens between 321 and 480 pixels (inclusive) */
  #largeCal {
      font-size:9px;
  }
}
</style>

  </head>

  <body>

    <div class="container">

      <!-- Fixed navbar -->
    <?php
    include_once("analyticstracking.php");
    include 'nav_bar.html'; 
    ?>

      <!-- Main component for a primary marketing message or call to action -->
  <div class="card text-center border-0" style="background-color: Silver;">
  <div class="row row-cols-1 row-cols-md-2 justify-content-md-center">
  <div class="col-md-4" >
<img src="./gallery/ring_lengthwise.jpeg" class="rounded-circle img-fluid mx-auto" alt="Ring Lengthwise View" > 
    </div>
<div class="col-md-4 align-self-center">
<h2 class="card-body">Calendar of Events</h2>      
  </div>     
  </div>
  <br>
  </div>

  <div class="container">

      <div id="Calendar" style="height:600px;">

        <div id="largeCal" class="col-sm-auto" >

<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FNew_York&mode=AGENDA&showTitle=1&title=SHOW%20SCHEDULE%20-%20CLICK%20Look%20for%20more%20TO%20ADVANCE%20THE%20LIST&src=MGllcjg4ODB1NmprdjlwMmhmdGM5c2t1MjhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZWo4NWZnamhoNW9kYWg5Y200NXAxM2ZmcWdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=OG5wNDhndW01b2E3Mmo3cXU1OTJtMGVjOW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=bnVrNGplc3R2bnI4djk0YXRnZW1xbGtsZ2dAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=aGFxcmZ2MDdlYzc4a3FlcGFjNDV0dWp1cTRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=OG45Z2xwY3E1OGdxczE3YmwxcjIydjE2OGNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZGUzYWM5MzAzYzlhZTIxNTQ3MTVlZjJmMDcwZDg3NDU1MzgwZmFiOTNkNGYwN2IzMzlhNjk1ZTVhNWQ4Y2JkY0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=M3M2ZzlxYjVwMWw2ajkydnQ3aThyaWw1ZG9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=MXVmM3A3bmZramgyYzUzaHFrdjJibjRoZ29AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=cWhjcTlxaW9oOTZzcmNtdmQzdmk0Nm9wcm9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=MGpnZTl0NTdwNmh1ZHFsMGpyZzNicDNqMjhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23D81B60&color=%23E67C73&color=%23D50000&color=%23F6BF26&color=%23E4C441&color=%237986CB&color=%23F6BF26&color=%233F51B5&color=%239E69AF&color=%237CB342&color=%23616161" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>

<br><br><br>
        </div>

      </div>  <!-- /calendar div -->
  <br>
  </div> <!-- /container -->
 
  </div> <!-- /container -->

    <?php 
      include 'footer-row.html';
    ?>

    <?php 
      include 'scripts-body.html';
    ?>  
  </body>
</html>
