<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Purkupiha App - Employees</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="newstyle.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	</head>
	<body>
		<?php   session_start();  ?>
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
			<li><a class="active" href="combined_employee.php">Modify<br>Employees</a></li>
		  <li><a href="combined_machine.php">Modify<br>Machines</a></li>
		  <li><a href="combined_tools.php">Modify<br>Tools</a></li>
			<li><a href="logout.php"><img class="logout" src="images/logout.png" width="40"></a></li>
		</ul>
	</div>


<div class="form">
 <form action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "post">

	  <div class="machine">
	<img src="images/helmet2.png" class="machine"><br>
	  </div><br>

<p align="center">On this page you can add or remove employees from the database.</p>
	<hr>

<?php
#connect to database
require_once "connect.php";

# form data, HTML code
echo '<div align="center">';
echo '<p align="center">Select an employee to modify, or type in a new one.</p>';
echo '<table border=0 style="background:#ff9900;padding:10px 10px 15px 10px"><tr>';
echo '<td valign="top">';
echo '<label>Employee Name:</label><br>';
echo '<input type="text" value="" name="newshort" id="newshort" /><br>';
echo '<label>Position:</label><br>';
echo '<input type="text" value="" name="newmake" id="newmake" /><br>';
echo '</td>';
echo '<td valign="top">';
echo '<label>Message(optional):</label><br>';
echo '<input type="text" value="" name="message" id="message" maxlength="35"/>';
echo '</td></tr></table>';
echo '</div>';
echo '<br><br>';

# DELETE MACHINE is pressed
	if (isset($_POST["submit"])){
		foreach ($_POST['serviced'] as $service_id) {

#mysql function when button is pressed
			$delmachine ="DELETE FROM employees WHERE id = $service_id ";
			mysqli_query($dbc,$delmachine)
				or die('Error deleting from database.');
								#returns an error if error deleting.
		}
	echo '<p class="report" align="center" style="color: red;">Employee Deleted<br/>';
#confirms successful query
	}

# ADD MACHINE button pressed
	if (isset($_POST["addnewmachine"])){

	$newshortnum = $_POST['newshort'];
	$newmaker = $_POST['newmake'];
	$message = $_POST['message'];

	if($newshortnum !=''|| $newmaker !=''){
#mysql function when button is pressed
	$addnew = "INSERT INTO employees(empname, position, message) VALUES ('$newshortnum','$newmaker','$message' )";
	mysqli_query($dbc,$addnew)
		or die('Error adding user to database.');
							#returns an error if error adding.
				}
echo '<p class="report" align="center" style="color: red;">New employee added!</p>';
#confirms successful query
	}

# UPDATE button pressed
	if (isset($_POST["updatetable"])){

	$newshortnum = $_POST['newshort'];
	$newmaker = $_POST['newmake'];
	$message = $_POST['message'];

	if($newshortnum !=''|| $newmaker !=''){
				foreach ($_POST['serviced'] as $service_id) {
#mysql function when button is pressed
	$updatetable = "UPDATE employees SET empname='$newshortnum', position='$newmaker', message='$message' WHERE id = $service_id ";
	mysqli_query($dbc,$updatetable)
		or die('Error updating database.');
							#returns an error if error updating.
				}
			}
	echo '<p class="report" align="center" style="color: red;">Entry Updated!</p>';
	#confirms successful query
	}

# list all in database with radio selection
				$query = "SELECT * FROM employees";
				$result = mysqli_query($dbc, $query);
				echo '<table border=0><th colspan="2">Name, Title, and Message(optional)</th>';

				while ($row = mysqli_fetch_array($result))	{
				#the next 5 lines automatically create checkboxes for each entry in table

					echo '<tr><td><input type="radio" value="' .$row['id'] . '" name="serviced[]" />';
					echo $row['empname'];
					echo '</td><td><strong>&nbsp;&nbsp;';
					echo ' &nbsp;' . $row['position'];
					echo '</strong>';
					echo '</td><td>';
					echo ' ' . $row['message'];
					echo '</td></tr>';
				}
echo '</table>';
echo '<hr>';
echo '<p>Please verify your selection before submitting. All submissions are final!</p><br><br>';

	#close connection
	mysqli_close($dbc);
	?>


<input type="submit" name="submit" value="Delete Employee" style="background:#ff3300;">
<input type="submit" name="updatetable" value="Update Entry">
<input type="submit" name="addnewmachine" value="Add Employee">

</form>

</div>
</div>
</html>
