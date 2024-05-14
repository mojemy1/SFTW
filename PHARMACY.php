<?php

include("serverpharmacy.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHARMACY</title>
	</head>
	<body>
		<style>
		body{
		background-image:url("1.jpeg");
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed;
		}
		</style>

		 <form action ="serverpharmacy.php" method="post">
		 
			<font face="Brush Script MT" size="72"> &nbsp&nbsp&nbsp <u>PHARMACY</u> </font> <hr>

			<center> <font size="28"> <b>Recording Pharmacy Data</b> <br>
		
			<label>Name</label>  <input type="text" autofocus required name="pharname" value="<?php echo $pharname; ?>"> <br>
			<label>Number</label>  <input type="text" name="pharnumber" value="<?php echo $pharnumber; ?>"> <br>
			<label>Location</label>  <input type="text" name="pharlocation" value="<?php echo $pharlocation; ?>"> <br>

			<button type="submit" name="Save"> Save </button> 
			<button type="reset" name="Clear"> Clear </button> 
			<button type="submit" name="Edit"> Edit </button> 
			<button type="submit" name="Delete"> Delete </button> <br> </font> </center> 
			
		</form>
		<a href="index.html"> HOME </a>				
		<hr>
		<center>
			<table border="1" cellpadding="10">
				<!--set col width-->
				<col width="150">
				<col width="150">
				<col width="150">
				<!--set col width-->
				
					<tr>
						<th>Pharmacy Name</th>
						<th>Pharmacy Number</th>
						<th>Pharmacy Location</th>
					</tr>
				<tbody>
						<!--Display Dynamic row of the tables from the Database-->
						<?php while ($row = mysqli_fetch_array($resultset)) { ?>
							<tr>
									<td><?php echo $row['PharName']; ?></td>
									<td><?php echo $row['PharNumber']; ?></td>
									<td><?php echo $row['PharLocation']; ?></td>
							</tr>
						<?php } ?>
						<!--Display Dynamic row of the tables from the Database-->
					</tbody>	
			</table>	
		</center>    
	</body>
</html>