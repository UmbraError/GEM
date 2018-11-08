<?php
include_once('header.php');

//set the cookie to keep user logged in
//setcookie("User", $currentUser);
?>

<h2 align = "center"> User Login </h2>

<form style  = "border:3px solid #f1f1f1;
		font-family: Arial, Helvetica, sans-serif;
		width: 50%;
		margin-right: 25%;
		margin-left: 25%"
      align = "center">

	<div class="container">
		</br>
		<label for="uname">
			<b>Username: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="uname" required>
		</br>
		</br>
		<label for="psw">
			<b>Password: </b>
		</label>
		<input type="password" 
		       placeholder="" 
		       name="psw" required>
		</br>
		</br>
		<button type="submit"
		        onclick="login(uname,psw)"
			style="width:245px;
			       background-color: #4CAF50;
			       padding:5px;
			       border: none">
			<b> 
				<font color = "white">
					Login 
				</font>
			</b>
		</button>
		</br>
		</br>
	</div>
	<div class="container" style="background-color:#f1f1f1">
		<span class="psw">
			Forgot
			<a href="ForgotPassword.php">password</a>?
		</span>
	</div>
</form>

<font color = "red">
<p id="error" align = "center"> </p>
</font>

<script>
function login(name,pass) {
	document.getElementById("error").innerHTML =
	       	"* Invaild Username or Password";
	//if else check on server for if they are valid
	//set cookie to track in failed password trys
	//set cookie that they are logged in
	
}
</script>

<?php
include_once('footer.php');
?>
