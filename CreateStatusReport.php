<?php
include_once('header.php');

//set the cookie to keep user logged in
//setcookie("User", $currentUser);
?>

<h2 align = "center"> Generate Event Status Report </h2>

<form style  = "border:3px solid #f1f1f1;
		font-family: Arial, Helvetica, sans-serif;
		width: 60%;
		margin-right: 20%;
		margin-left: 20%"
      align  = "center">

	<div style="background-color:#f1f1f1">
		<span>
			Event Display Options
		</span>
	</div>
	<div>
		</br>
		<label for="artistband" style="display:inline-block;width:160px">
			<b>Artist Band ID:</b>
		</label>
		<input type="radio" name="artistband" value="yes"> Yes
		<input type="radio" name="artistband" value="no"> No
		</br>
		</br>
		<label for="location" style="display:inline-block;width:160px">
			<b>Location:</b>
		</label>
		<input type="radio" name="location" value="yes"> Yes
		<input type="radio" name="location" value="no"> No
		</br>
		</br>
		<label for="status" style="display:inline-block;width:160px">
			<b>Status:</b>
		</label>
		<input type="radio" name="status" value="yes"> Yes
		<input type="radio" name="status" value="no"> No
		</br>
		</br>
		<label for="capacity" style="display:inline-block;width:160px">
			<b>Seating Capacity:</b>
		</label>
		<input type="radio" name="capacity" value="yes"> Yes
		<input type="radio" name="capacity" value="no"> No
		</br>
		</br>
	</div>
	<div style="background-color:#f1f1f1">
		<span>
			Vendor Display Options
		</span>
	</div>
	<div>
	</br>
		<label for="vendor_id" style="display:inline-block;width:160px">
			<b>Vendor ID:</b>
		</label>
		<input type="radio" name="vendor_id" value="yes"> Yes
		<input type="radio" name="vendor_id" value="no"> No
		</br>
		</br>
		<label for="b_name" style="display:inline-block;width:160px">
			<b>Business Name:</b>
		</label>
		<input type="radio" name="b_name" value="yes"> Yes
		<input type="radio" name="b_name" value="no"> No
		</br>
		</br>
		<label for="address" style="display:inline-block;width:160px">
			<b>Address:</b>
		</label>
		<input type="radio" name="address" value="yes"> Yes
		<input type="radio" name="address" value="no"> No
		</br>
		</br>
		<label for="type" style="display:inline-block;width:160px">
			<b>Type:</b>
		</label>
		<input type="radio" name="type" value="yes"> Yes
		<input type="radio" name="type" value="no"> No
		</br>
		</br>
		<label for="contact" style="display:inline-block;width:160px">
			<b>Contact:</b>
		</label>
		<input type="radio" name="contact" value="yes"> Yes
		<input type="radio" name="contact" value="no"> No
		</br>
		</br>

	<div style="background-color:#f1f1f1">
		<span>
			Date Range
		</span>
	</div>
		</br>
		<label for="start_day" style="display:inline-block;width:160px">
			<b>Start Day: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="start_day" required
		       style="width:140px">
		</br>
		</br>
		<label for="start_month" style="display:inline-block;width:160px">
			<b>Start Month:</b>
		</label>
		<select style="width:140px">
			<option value="January"> January </option>
			<option value="February"> February </option>
			<option value="March"> March </option>
			<option value="April"> April </option>
			<option value="May"> May </option>
			<option value="June"> June </option>
			<option value="July"> July </option>
			<option value="August"> August </option>
			<option value="September"> September </option>
			<option value="October"> October </option>
			<option value="November"> November </option>
			<option value="December"> December </option>
		</select>
		</br>
		</br>

		<label for="start_year" style="display:inline-block;width:160px">
			<b>Start Year: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="start_year" required
		       style="width:140px">
		</br>
		</br>
		<label for="end_day" style="display:inline-block;width:160px">
			<b>End Day: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="end_day" required
		       style="width:140px">
		</br>
		</br>
		<label for="end_month" style="display:inline-block;width:160px">
			<b>End Month:</b>
		</label>
		<select style="width:140px">
			<option value="January"> January </option>
			<option value="February"> February </option>
			<option value="March"> March </option>
			<option value="April"> April </option>
			<option value="May"> May </option>
			<option value="June"> June </option>
			<option value="July"> July </option>
			<option value="August"> August </option>
			<option value="September"> September </option>
			<option value="October"> October </option>
			<option value="November"> November </option>
			<option value="December"> December </option>
		</select>
		</br>
		</br>

		<label for="end_year" style="display:inline-block;width:160px">
			<b>End Year: </b>
		</label>
		<input type="text" 
		       placeholder="" 
		       name="end_year" required
		       style="width:140px">
		</br>
		</br>


		<div style="background-color:#f1f1f1">
		<span>
			Tickets
		</span>
		</div>
		</br>
		<label for="sold" style="display:inline-block;width:160px">
			<b>Tickets Sold:</b>
		</label>
		<input type="radio" name="sold" value="yes"> Yes
		<input type="radio" name="sold" value="no"> No
		</br>
		</br>
		<label for="remain" style="display:inline-block;width:160px">
			<b>Remaining Tickets:</b>
		</label>
		<input type="radio" name="remain" value="yes"> Yes
		<input type="radio" name="remain" value="no"> No
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
					Generate 
				</font>
			</b>
		</button>

	</div>	
</form>

<?php
include_once('footer.php');
?>

