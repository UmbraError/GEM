<!DOCTYPE html>
<html>
<head>
	<title>GEM System</title>
	<link rel="stylesheet" href="styles.css"> 
</head>
<body>
	<?php
		include_once('conn.php'); //connect to sql server
	?>


<?php		
//echo "Cookie named '" . $cookie_name . "' is not set!";
//echo "Cookie '" . $cookie_name . "' is set!<br>";
//echo "Value is: " . $_COOKIE[$cookie_name];

//$cookie_name = "User";
//setcookie("User", $currentUser);
//if(!isset($_COOKIE[$cookie_name])) {
//	header('Location: http://students.cs.niu.edu/~z1835773/CSCI467/GEM/Login.php');
//	exit;
//}
?>


	<header>
		<nav>
			<ul>
				<li>
				<img src="GEMLOGO_Trans.png" 
				     style="float:left;width:20px;height:20px;" 
				>
				</li> 

				<li><a href="index.html">Home</a></li> 
				<li>&#8226;</li>
				<li><a href="About.html">TestUser001</a></li>
				<li>&#8226;</li>
				<li><a href="Projects.html">Settings</a></li>
				<li>&#8226;</li>
				<li><a href="Portfolio.html">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
