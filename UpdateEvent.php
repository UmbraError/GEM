<?php
include_once('header.php');

//set the cookie to keep user logged in
//setcookie("User", $currentUser);
?>

<h2 align = "center"> Update Event </h2>

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
		<input type="text" 
		       placeholder="" 
		       name="event_id" required
		       style="width:200px">
		</br>
	</div>
	<div>
		</br>
		<label for="artist_band" style="display:inline-block;width:100px">
			<b>Artist\Band:</b>
		</label>
		<select style="width:200px">
			<option value="Gen"> Get from server </option>
		</select>
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

		<select style="width:200px">
			<option value="Alabama"> Alabama </option>
			<option value="Alaska"> Alaska </option>
			<option value="Arizona"> Arizona </option>
			<option value="Arkansas"> Arkansas </option>
			<option value="California"> California </option>
			<option value="Colorado"> Colorado </option>
			<option value="Connecticut"> Connecticut </option>
			<option value="Delaware"> Delaware </option>
			<option value="Florida"> Florida </option>
			<option value="Georgia"> Georgia </option>
			<option value="Hawaii"> Hawaii </option>
			<option value="Idaho"> Idaho </option>
			<option value="Illinois"> Illinois</option>
			<option value="Indiana"> Indiana </option>
			<option value="Iowa"> Iowa </option>
			<option value="Kansas"> Kansas </option>
			<option value="Kentucky"> Kentucky </option>
			<option value="Louisiana"> Louisiana </option>
			<option value="Maine"> Maine </option>
			<option value="Maryland"> Maryland </option>
			<option value="Massachusetts"> Massachusetts </option>
			<option value="Michigan"> Michigan </option>
			<option value="Minnesota"> Minnesota </option>
			<option value="Mississippi"> Mississippi </option>
			<option value="Missouri"> Missouri </option>
			<option value="Montana"> Montana</option>
			<option value="Nebraska"> Nebraska </option>
			<option value="Nevada"> Nevada </option>
			<option value="New Hampshire"> New Hampshire </option>
			<option value="New Jersey"> New Jersey </option>
			<option value="New Mexico"> New Mexico </option>
			<option value="New York"> New York </option>
			<option value="North Carolina"> North Carolina </option>
			<option value="North Dakota"> North Dakota </option>
			<option value="Ohio"> Ohio </option>
			<option value="Oklahoma"> Oklahoma </option>
			<option value="Oregon"> Oregon </option>
			<option value="Pennsylvania"> Pennsylvania</option>
			<option value="Rhode Island"> Rhode Island </option>
			<option value="South Carolina"> South Carolina </option>
			<option value="South Dakota"> South Dakota </option>
			<option value="Tennessee"> Tennessee </option>
			<option value="Texas"> Texas </option>
			<option value="Utah"> Utah </option>
			<option value="Vermont"> Vermont </option>
			<option value="Virginia"> Virginia </option>
			<option value="Washington"> Washington </option>
			<option value="West Virginia"> West Virginia </option>
			<option value="Wisconsin"> Wisconsin </option>
			<option value="Wyoming"> Wyoming</option>
		</select>
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
		<select style="width:200px">
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
			Event Status
		</span>
	</div>
	<div>
		</br>
		<label style="display:inline-block;width:100px">
			<b>Status: </b>
		<select style = "width:200px">
			<option value="created"> Created </option>
			<option value="approved"> Approved </option>
			<option value="advertised"> Advertised </option>
			<option value="sold_out"> Sold Out </option>
		</select>
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
					Update 
				</font>
			</b>
		</button>

	</div>	
</form>

<?php
include_once('footer.php');
?>

