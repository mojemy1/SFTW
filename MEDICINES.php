<?php

include("servermedicines.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>MEDICINES</title>
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

		 <form action="servermedicines.php" method="post">
		
			<font face="Brush Script MT" size="72"> &nbsp&nbsp&nbsp <u>PHARMACY</u> </font> <hr>

			<center> <font size="28"> <b>Recording Medicines Data</b> <br>

			Medicine Name <input type="text" autofocus required name="medicine_name" value="<?php echo $medicine_name; ?>"> <br>

			Medicine Number <input type="number" required name="medicine_number" value="<?php echo $medicine_number; ?>"> <br>

			Expiring date <input type="date" required name="expiring_date" value="<?php echo $expiring_date; ?>"> <br>

			Price <input type="number" required name="medicine_price" value="<?php echo $medicine_price; ?>"> <br>

			<button type="submit" name="Save"> Save </button> 
			<button type="reset" name="Clear"> Clear </button> 
			<button type="submit" name="Edit"> Edit </button> 
			<button type="submit" name="Delete"> Delete </button> <br> </font> </center> 

			<a href="index.html"> HOME </a>				

			<hr>
 	
		</form>
		<center>
			<table border="1" cellpadding="10">
				<!--set col width-->
				<col width="150">
				<col width="150">
				<col width="150">
				<col width="150">
				<!--set col width-->
				
					<tr>
						<th>Medicine Name</th>
						<th>Medicine Number</th>
						<th>Expiring date</th>
						<th>Price</th>
					</tr>
				<tbody>
						<!--Display Dynamic row of the tables from the Database-->
						<?php while ($row = mysqli_fetch_array($resultset)) { ?>
							<tr>
									<td><?php echo $row['Name']; ?></td>
									<td><?php echo $row['Med_number']; ?></td>
									<td><?php echo $row['EXP_date']; ?></td>
									<td><?php echo $row['Price']; ?></td>
							</tr>
						<?php } ?>
						<!--Display Dynamic row of the tables from the Database-->
					</tbody>	
			</table>
		</center>
	</body>
</html>