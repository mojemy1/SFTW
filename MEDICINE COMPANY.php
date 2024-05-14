<?php

include("servermedcompany.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>MEDICINE COMPANY</title>
	</head>
	<body>
		<style>

		body
		{
		background-image:url("1.jpeg");
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed;
		}

		</style>

		<form action="servermedcompany.php" method="post">
			
			<font face="Brush Script MT" size="72"> &nbsp&nbsp&nbsp <u>PHARMACY</u> </font> <hr>


			<center> <font size="28"> <b>Recording Medicine Company Data</b> <br>

			Name <input type="text" autofocus required name="medcompany_name" value="<?php echo $medcompany_name; ?>"> <br>

			Order <input type="text" required name="order_name" value="<?php echo $order_name; ?>"> <br>

			Delivery Location <input type="text" name="delivery_location" value="<?php echo $delivery_location; ?>"> <br>

			Order Delivery Deadline <input type="datetime-local" required  name="order_deadline" value="<?php echo $order_deadline; ?>"> <br>

			Price <input type="number" name="order_price" value="<?php echo $order_price; ?>"> <br>

			Payment <input type="number" required name="payment" value="<?php echo $payment; ?>"> <br>

			Remaining <input type="number" name="remaining" value="<?php echo $remaining; ?>"> <br>

			<button type="submit" name="Save"> Save </button> 
			<button type="reset" name="Clear"> Clear </button> 
			<button type="submit" name="Edit"> Edit </button> 
			<button type="submit" name="Delete"> Delete </button>  <br> </font> </center> 
			
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
				<col width="150">
				<col width="150">
				<col width="150">
				<!--set col width-->
				
					<tr>
						<th>Medicine Company Name</th>
						<th>Medicine Company Orders</th>
						<th>Delivery Location</th>
						<th>Order Deadline</th>
						<th>Order Price </th>
						<th>Payment</th>
						<th>Remaining</th>
					</tr>
				<tbody>
						<!--Display Dynamic row of the tables from the Database-->
						<?php while ($row = mysqli_fetch_array($resultset)) { ?>
							<tr>
									<td><?php echo $row['Name']; ?></td>
									<td><?php echo $row['Order']; ?></td>
									<td><?php echo $row['Delivery_location']; ?></td>
									<td><?php echo $row['Order_time_deadline']; ?></td>
									<td><?php echo $row['Order_price']; ?></td>
									<td><?php echo $row['Payment']; ?></td>
									<td><?php echo $row['Remaining']; ?></td>
							</tr>
						<?php } ?>
					</tbody>	
			</table>	
		</center>	
	</body>
</html>