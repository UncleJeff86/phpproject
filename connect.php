<?php
#working on localhost at HOME

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "localdb";

  // Creating connection
  $dbc = mysqli_connect($servername, $username, $password, $database)
  // Checking connection
  or die('Error connecting.');
          #displays conncetion error

#working on localhost ONLINE
/*
$servername = "127.0.0.1:51914/data/mysql/localdb";
$username = "azure";
$password = "6#vWHD_$";
$database = "localdb";
*/
// Creating connection
$dbc = mysqli_connect($servername, $username, $password, $database)
// Checking connection
or die('Error connecting.');
        #displays connection error

#hello

?>
