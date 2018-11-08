<?php
include_once('header.php');
?>

<h2 align = "center"> Status Report </h2>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

</style>

<table>
  <tr>
    <th>Band/Artist</th>
    <th>Date</th>
    <th>Start Time</th>
    <th>Status</th>
    <th>Vendor</th>
    <th>Type</th>
    <th>Tickets</th>
  </tr>
  <tr>
    <td>001</td>
    <td>2018/11/09</td>
    <td>14:00</td>
    <td>Approved</td>
    <td>Subway</td>
    <td>Food</td>
    <td>27/100</td>
  </tr>
    <tr>
    <td>002</td>
    <td>2018/11/12</td>
    <td>14:00</td>
    <td>Sold Out</td>
    <td>Subway</td>
    <td>Food</td>
    <td>300/300</td>
  </tr>
    <tr>
    <td>003</td>
    <td>2018/11/17</td>
    <td>18:00</td>
    <td>Created</td>
    <td>Pizza Hut</td>
    <td>Food</td>
    <td>0/100</td>
  </tr>

</table>

</br>

<form>
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
					Print
				</font>
			</b>
		</button>

	</div>	
</form>


<?php
include_once('footer.php');
?>
