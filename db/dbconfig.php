<?php

  $dbhostName = "localhost";
  $dbusername ="root";
  $dbpassword = "";
  $databasename = "bdnews";

   $link = mysqli_connect($dbhostName,$dbusername,$dbpassword,$databasename);
    if (!$link){
        echo "Error connecting";
    }
?>