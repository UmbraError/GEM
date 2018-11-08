<?php
// This file checks for cookies used to remember the current
// user so they don't have to login multiple times when
// completeing a tasks on the GEM system.
//***
//* Warning: This is not a secure system and stores unencrypted
//*          user information in the cookie data.
//*          This is a prototype for csci347.
//***

$cookie_name = "User";
if(!isset($_COOKIE[$cookie_name])) {
	header('Location: Login.php');
	exit;
}

?>
