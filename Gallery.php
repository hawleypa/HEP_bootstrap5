<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hollis Equestrian Park - Gallery</title>

    <?php
    include 'header-styles.html'; 
    ?>
    
  </head>

  <body style="padding:50px;">

    <div class="container">

      <!-- Fixed navbar -->
    <?php
    include_once("analyticstracking.php");
    include 'nav_bar.html'; 
    ?>

      <!-- Main component for a primary marketing message or call to action -->
  <div class="container">
  <div class="text-center">
<h2><img src="./gallery/newring.jpg" class="rounded-circle img-fluid mx-auto" alt="New ring" style="margin:0; position:relative; display:inline-block; max-height:200px;"> 
    Send us your photos to add to the gallery.</h2>      
  </div>     
  </div>
    <div class="album py-5" style="background-color: #e3f2fd;">
    <div class="container" style="background-color: #e3f2fd;">
      <p id="demopath"></p>
      <p id="demohash"></p>
    <div class="row row-cols-1 row-cols-md-2">

<?php 

$fileSystemIterator = new FilesystemIterator('gallery');
$entries = array();
foreach ($fileSystemIterator as $fileInfo){
    $entries[] = $fileInfo->getFilename();
}
$count = count($entries);

for ($i = 0; $i < $count; $i++) {
    //$even = $i % 2;
    //if ($even == 0) { echo "<tr>"; };
    $fileName = $entries[$i];
    echo "<div class='col-md-4'>";
    echo "  <div class='card mb-4 border border-success'>";  
    echo "<img src=./gallery/". $fileName ." class='card-img' alt='". $fileName ."'>";
    //echo "<td class='thumb' style='border-width: 0;'>";
    //echo "<a class='rounded' href=./gallery/". $fileName .">";
    //echo "<img class='img-fluid mx-auto' src=./gallery/". $fileName ." alt='". $fileName ."'>";
    //echo "</a>";
    //echo "</td>";
    echo "  </div>";
    echo "</div>";
    //if ($even == 1) { echo "</tr>"; };
}
?>

    </div>
    </div>
    </div> <!-- class=album -->
    </div> <!-- /container -->
       
    <?php 
      include 'footer-row.html';
    ?>

    <?php 
      include 'scripts-body.html';
    ?>
    
  </body>
</html>
