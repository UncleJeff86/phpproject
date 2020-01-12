<?php
#working on localhost at HOME
/*
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "localdb";

  // Creating connection
  $dbc = mysqli_connect($servername, $username, $password, $database)
  // Checking connection
  or die('Error connecting.');
          #displays conncetion error
*/
#working on localhost ONLINE


  $servername = "sql106.epizy.com";
  $username = "epiz_25047975";
  $password = "lOCnRXQQDFp";
  $database = "epiz_25047975_localdb";


// Creating connection
$dbc = mysqli_connect($servername, $username, $password, $database)
// Checking connection
or die('Error connecting.');
        #displays connection error


?>
