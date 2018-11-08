<?php
	include_once 'secrets.php';

	try {
		$dbh = new PDO('mysql:host=courses;dbname=JavaCust65', $username, $password);


	} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
	}
?>
