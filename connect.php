<?php
#credentials on localhost on HOME SERVER

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "localdb";

  // Creating connection
  $dbc = mysqli_connect($servername, $username, $password, $database)
  // Checking connection
  or die('Error connecting.');
          #displays conncetion error

#working on localhost on AZURE SERVER
/* remove this comment line to enable connecting on azure server

$servername = "127.0.0.1:51914/data/mysql/localdb";
$username = "azure";
$password = "6#vWHD_$";
$database = "localdb";

*/ # remove this comment line to enable connecting on azure server

// Creating connection
$dbc = mysqli_connect($servername, $username, $password, $database)
// Checking connection
or die('Error connecting.');
        #displays connection error


?>
