<html>
<head><title> Page2 </title></head>

<form action="" method="post">
<p>
<select name="BoatNames">

<?php
include 'secrets.php';
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
}
catch(PDOexception $e) { //handle that exception
	echo "Connection to database failed: " . $e->getMessage();
}
?>

</form>
</body>
</html>
