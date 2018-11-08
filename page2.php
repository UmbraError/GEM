<!DOCTYPE
	Elizabeth Harasymiw,
	Section 4,
	Jonathan Lehuta,
	Spring 2018,
	Directions: Page 2
		Design and code a web page that has a drop down
		(selection) box that has a list of all the boat
		names, a selection box that has a list of service
		categories and two buttons, one that will submit
		the page and one that will clear the selection.
		The user needs to pick a boat name and a service
		category. When the submit button is clicked a new
		service request should be created. 
>
<html>
<head><title> Page2 </title></head>

<form action="" method="post">
<p>
<select name="BoatNames">

<?php
include 'passwords.php';
try{ 
	$dsn = "mysql:host=courses;dbname=z1835773";
	$pdo = new PDO($dsn, $username, $password);

	echo "<br/>";
	$sqlstmt = $pdo->query('SELECT SlipNum, BoatName FROM MarinaSlip');
	while ($row = $sqlstmt->fetch())
	{
		echo "<option value= '";
	        echo $row['SlipNum'] ."'>";
		echo $row['BoatName'];
		echo "</option>";
	}

	echo "</select><br/><br/>";
	$sqlstmt = $pdo->query('SELECT CategoryNum, CategoryDescription FROM ServiceCategory');
	while ($row = $sqlstmt->fetch())
	{
		echo "<input type='radio' name='repair'";
		echo "value='1'; required/>";
		echo $row['CategoryNum'] . ": ";
		echo $row['CategoryDescription'];
		echo "<br/>";
	}
	echo "<br/>";

	echo "<input type='submit' name='submit' value='Submit'";
	echo "onclick='insert()'> </input>";
	echo "<input type='reset' name='reset'";
       	echo "value='Clear'></input>";
}
catch(PDOexception $e) { //handle that exception
	echo "Connection to database failed: " . $e->getMessage();
}
?>

</form>
</p></body>
<p align="center">
	<a href="http://students.cs.niu.edu/~z1835773/assignment11/page1.php">Page 1</a>
	<a href="http://students.cs.niu.edu/~z1835773/assignment11/page2.php">Page 2</a>
	<a href="http://students.cs.niu.edu/~z1835773/assignment11/page3.php">Page 3</a>
</p>
<p align="center">
	Assignment 11 for CSCI 466 </br>
	Due Date: April 27, 2018 </br>
	Elizabeth Harasymiw </br>
	Section 4 </br>
</p>
</html>}
