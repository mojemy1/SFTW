<?php

include("servercustomer.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>CUSTOMER</title>
	</head>
	<body>
		<style>

		body{
		background-image:url("1.jpeg");
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed ;		
		}

		</style>
		<font face="Brush Script MT" size="72"> &nbsp&nbsp&nbsp <u>PHARMACY</u> </font> <hr>

		<center><font size="28"><b>Recording Customer Data</b><br>

		<form action="servercustomer.php" method="post">
			

			Name <input type="text" autofocus required name="customer_name" value="<?php echo $customer_name; ?>"> <br>
			Address <input type="text" name="customer_address" value="<?php echo $customer_address; ?>"> <br>
			Phone Number <input type="text" required name="customer_phonenumber" value="<?php echo $customer_phonenumber; ?>"> <br>
			Age <input type="number" name="customer_age" value="<?php echo $customer_age; ?>"> <br>
			Order <input type="text" required name="customer_order" value="<?php echo $customer_order; ?>"> <br>
			Price <input type="number" required name="price" value="<?php echo $price; ?>"> <br>

			
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
				<col width="150">
				<col width="150">
				<col width="150">
				<!--set col width-->
				<thead>
					<tr>
						<th>Customer Name</th>
						<th>Customer Address</th>
						<th>Customer Number</th>
						<th>Customer Age</th>
						<th>Customer Order </th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
						<!--Display Dynamic row of the tables from the Database-->
						<?php while ($row = mysqli_fetch_array($resultset)) { ?>
							<tr>
									<td><?php echo $row['Name']; ?></td>
									<td><?php echo $row['Address']; ?></td>
									<td><?php echo $row['Number']; ?></td>
									<td><?php echo $row['Age']; ?></td>
									<td><?php echo $row['Orders']; ?></td>
									<td><?php echo $row['Price']; ?></td>
							</tr>
						<?php } ?>
						<!--Display Dynamic row of the tables from the Database-->
					</tbody>	
			</table>
		</center>
	</body>
</html>