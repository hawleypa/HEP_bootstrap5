<html>
 <head>
  <title>Python - List Agenda</title>
    <?php
    include 'header-styles.html'; 
    ?>
 </head>
 <body>
 <h1>Python - List Agenda</h1>
    <div class="table-responsive" style="background-color:Gainsboro;overflow-x:auto;">
<table class="table table-bordered table-hover table-condensed table-striped text-center">
           <tr><th class="text-center">Event</th><th class="text-center">Date</th><th class="text-center">Start Time</th><th class="text-center">End Time</th></tr>
    <?php

    $last_line = system('python events.py --noauth_local_webserver', $retval);

    echo '</table>';
    echo '</div>';
 
    include 'scripts-body.html';
    ?>

 </body>
</html>
