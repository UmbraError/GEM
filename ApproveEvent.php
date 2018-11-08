<?php
include_once('header.php');

//set the cookie to keep user logged in
//setcookie("User", $currentUser);
?>

<h2 align = "center"> Approve Event </h2>

<form style  = "border:3px solid #f1f1f1;
		font-family: Arial, Helvetica, sans-serif;
		width: 60%;
		margin-right: 20%;
		margin-left: 20%"
      align  = "center">

	<div style="background-color:#f1f1f1">
		<span>
			Identification
		</span>
	</div>
	<div>
		</br>
		<label for="event_id" style="display:inline-block;width:100px">
			<b>Event ID:</b>
		</label>
		<select style="width:200px">
			<option value="Gen"> Get from server </option>
		</select>
		</br>
	</div>
	<div>
		</br>
		
		<label for="artist_band" style="display:inline-block;width:100px">
			<b>Artist\Band:</b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="event_id" required
		       style="width:200px">
		</br>
		</br>
	</div>
	<div style="background-color:#f1f1f1">
		<span>
			Location
		</span>
	</div>
	<div>
		</br>
		<label for="street" style="display:inline-block;width:100px">
			<b>Street: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="street" required
		       style="width:200px">
		</br>
		</br>
		<label for="city" style="display:inline-block;width:100px">
			<b>City:</b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="city" required
		       style="width:200px">
		</br>
		</br>
		<label for="state" style="display:inline-block;width:100px">
			<b>State:</b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="state" required
		       style="width:200px">

		</br>
		</br>
		<label for="zip" style="display:inline-block;width:100px">
			<b>Zip:</b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="zip" required
		       style="width:200px">
		</br>
	
		</br>
	<div style="background-color:#f1f1f1">
		<span>
			Date and Time
		</span>
	</div>
		</br>
		<label for="year" style="display:inline-block;width:100px">
			<b>Year: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="year" required
		       style="width:200px">
		</br>
		</br>
		<label for="month" style="display:inline-block;width:100px">
			<b>Month:</b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="month" required
		       style="width:200px">

		</br>
		</br>
		<label for="day" style="display:inline-block;width:100px">
			<b>Day: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="day" required
		       style="width:200px">
		</br>
		</br>
		<label for="time" style="display:inline-block;width:100px">
			<b>Time: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="time" required
		       style="width:200px">
		</br>
		</br>

	<div style="background-color:#f1f1f1">
		<span>
			Seating
		</span>
	</div>
		</br>
		<label for="capacity" style="display:inline-block;width:100px">
			<b>Capacity: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="capacity" required
		       style="width:200px">
		</br>
		</br>

	</div>
	<div style="background-color:#f1f1f1">
		<span>
		<font color="#f1f1f1">.</font>
		</span>
	</div>
	<div>
	<button type="cancel"
		        onclick="login(uname,psw)"
			style="width:49%;
			       background-color: #AF5050;
			       padding:5px;
			       border: none;
			       fixed: left">
			<b> 
				<font color = "white">
					Cancel
				</font>
			</b>
		</button>

		<button type="create"
		        onclick="login(uname,psw)"
			style="width:49%;
			       background-color: #4CAF50;
			       padding:5px;
			       border: none;
			       fixed: right">
				
			<b> 
				<font color = "white">
					Approve 
				</font>
			</b>
		</button>

	</div>	
</form>

<?php
include_once('footer.php');
?>

