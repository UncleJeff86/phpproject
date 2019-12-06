<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Purkupiha App - Home</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="newstyle.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	</head>
	<body>
		<?php   session_start();
# Created by Jeffrey Eboreime
# Date: 6/12/2019
		 ?>
		<?php
		      if(!isset($_SESSION['loggedin'])) // If session is not set then redirect to Login Page
		       {
		           header("Location:login.php");
		       }
		?>
	</body>
	<div class="logo">
	<a href="index.php"><img class="purkupihaoy" src="images/ppoy.png"></a>
	</div>

<div class="mainbox">
	<div class="nav">
	<ul>
		<li><a href="combined_employee.php">Modify<br>Employees</a></li>
	  <li><a href="combined_machine.php">Modify<br>Machines</a></li>
	  <li><a href="combined_tools.php">Modify<br>Tools</a></li>
		<li><a href="logout.php"><img class="logout" src="images/logout.png" width="40"></a></li>
	</ul>
	</div>


<div class="form">

	  <div class="machine">
	<img src="images/logoonly.png" class="machine">
	  </div>
<p align="center"> Welcome!<br><br><br>
This PHP app is designed to be used as an administrative tool
to manage (add, edit, and delete) machinery, tools, and employees.
Click on the tabs above to start!<br><br><br>
Project by: Jeffrey Eboreime</p>


</div>
</div>
</html>
